<?php

namespace App\Http\Controllers;

use App\Sprint;
use Illuminate\Http\Request;

class SprintsController extends AuthenticatedController
{
	public function index() {
		$this->data['sprints'] = Sprint::all();
		return view('sprints.index')->with('data', $this->data);
	}

	public function create() {
		return view('sprints.create')->with('data', $this->data);
	}

	public function store(Request $request) {
		$sprint = new Sprint();
		$sprint->name = $request->name;
		$sprint->start_date = $request->start_date;
		$sprint->end_date = $request->end_date;
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
			return redirect('/')->with('notifications',$this->notifications);
		}
		$this->data['sprint']= $sprint;
		return view('sprints.edit')->with('data',$this->data);
	}


	public function updateSprint(Request $request, $id) {
		dd($id);
	}
	public function deleted($id) {

	}
}
