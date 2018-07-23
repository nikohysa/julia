<?php

namespace App\Http\Controllers;

use App\Sprint;
use App\Story;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use function redirect;
use function request;
use function typeOf;
use function var_dump;

class StoriesController extends AuthenticatedController {
	//

	public function create() {
		$this->data['sprints'] = Sprint::all();
		$this->data['users'] = User::all();
		return view('stories/create')->with('data', $this->data);
	}

	public function store(Request $data) {
		$d = [
			'title' => "Hello World",
			'project_id' => $data->project,
			'user_id' => $data->user,
			'created_by' => Auth::user()->id,
			'description' => 'Helloooooo'
		];
		Story::create($d);
		redirect('/');
	}

}
