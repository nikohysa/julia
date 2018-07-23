<?php

namespace App\Http\Controllers;

use App\Sprint;
use App\Story;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function redirect;

class StoriesController extends AuthenticatedController {
	//

	public function create() {
		$this->data['sprints'] = Sprint::all();
		$this->data['users'] = User::all();
		return view('stories/create')->with('data', $this->data);
	}

	public function store(Request $request) {
		$story = new Story();
		$story->title = $request->title;
		$story->description = $request->description;
		$story->user_id = $request->user;
		$story->created_by = Auth::user()->id;
		$story->save();
		$this->notifications[] = [
			'message' =>sprintf("Story: %s created successfully", $story->title),
			'type' => "success",
			"id" => $story->id,
			"url"=>"#"
		];
		return redirect('/home')->with('notifications',$this->notifications);
	}

}
