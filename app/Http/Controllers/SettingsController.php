<?php

namespace App\Http\Controllers;

use App\StoryState;
use Illuminate\Http\Request;

class SettingsController extends AuthenticatedController
{
	public function index() {
		$this->data['storyStates'] = StoryState::all();
		return view('settings.index')->with('data', $this->data);
	}

	public function storyStatesCreate() {
		return view('settings.storyStates.create')->with('data', $this->data);
	}

	public function storyStatesStore(Request $request) {
		$storyState = new StoryState();
		$storyState->name = $request->name;

		$storyState->save();
		$this->notifications[] = [
			'message' => sprintf("Story state %s has been created", $storyState->name),
			'type' => "success",
			"id" => $storyState->id,
			"url" => "#"
		];
		return redirect('/settings')->with('notifications', $this->notifications);
	}
}
