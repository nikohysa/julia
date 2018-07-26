<?php

namespace App\Http\Controllers;

use App\Sprint;
use Carbon\Carbon;
use function date;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function redirect;
use function strtotime;
use function var_dump;
class SprintsController extends AuthenticatedController {
	public function index() {
		$this->data['sprints'] = Sprint::all();
		return view('sprints.index')->with('data', $this->data);
	}
	
	public function create() {
		return view('sprints.create')->with('data', $this->data);
	}
	
	public function store(Request $request) {
		if (!$request->name || !$request->start_date || $request->date_end) {
			$this->notifications[] = [
				'message' => "Please fill all the inputs",
				'type' => "warning",
				"url" => "#"
			];
			return redirect('/sprints/create')->with('notifications', $this->notifications);
		}
		$sprint = new Sprint();
		$sprint->name = $request->name;
		$sprint->start_date = $request->start_date;
		$sprint->end_date = $request->end_date;
		$sprint->is_active = false;
		$sprint->save();
		$this->notifications[] = [
			'message' => sprintf("Sprint %s has been created", $sprint->name),
			'type' => "success",
			"id" => $sprint->id,
			"url" => "#"
		];
		return redirect('/sprints')->with('notifications', $this->notifications);
	}
	
	public function edit($id) {
		$sprint = Sprint::find($id);
		if (!$sprint) {
			$this->notifications[] = [
				'message' => "This sprint is not available",
				'type' => "danger",
				'url' => "/sprints"
			];
			return redirect('/')->with('notifications', $this->notifications);
		}
		$this->data['sprint'] = $sprint;
		return view('sprints.edit')->with('data', $this->data);
	}
	
	
	public function update(Request $request, $id) {
		$sprint = Sprint::find($id);
		$sprint->name = $request->name;
		if (!$request->name || !$request->start_date || $request->date_end) {
			$this->notifications[] = [
				'message' => "Please fill all the inputs",
				'type' => "warning",
				"url" => "#"
			];
			return redirect('/sprints/'.$id)->with('notifications', $this->notifications);
			
		}
		if (strtotime($request->start_date) > strtotime($request->end_date)) {
			$this->notifications[] = [
				'message' => "Start date cannot be bigger than end date",
				'type' => "warning",
				"url" => "#"
			];
			return redirect('/sprints/'.$id)->with('notifications', $this->notifications);
		}
		$sprint->start_date = $request->start_date;
		$sprint->end_date = $request->end_date;
		$sprint->update();
		
		$this->notifications[] = [
			'message' => "Sprint modified successfull",
			'type' => "success",
			"url" => "/"
		];
		return redirect('/sprints')->with('notifications', $this->notifications);
	}
	
	public function delete($id) {
		$sprint = Sprint::find($id);
		if (!$sprint) {
			$this->notifications[] = [
				'message' => "This sprint is not available",
				'type' => "danger",
				'url' => "/sprints"
			];
			return redirect('/')->with('notifications', $this->notifications);
		}
		$sprint->delete();
		$this->notifications[] = [
			'message' => "Sprint deleted",
			'type' => "success",
			"url" => "/"
		];
		return redirect('/sprints')->with('notifications', $this->notifications);
	}
	
	public function makeActive(Request $request) {
		DB::table('sprints')->update(['is_active' => 0]);
		$sprint = Sprint::find($request->sprint);
		$sprint->is_active = true;
		$sprint->save();
		$this->notifications[] = [
			'message' => "Sprint made active",
			'type' => "success",
			"url" => "/"
		];
		return redirect('/sprints')->with('notifications', $this->notifications);
	}
}
