<?php

namespace App\Http\Controllers;

use App\StoryState;
use function dd;
use Illuminate\Http\Request;
use function redirect;
use function var_dump;
use function view;

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
		$storyState->position = StoryState::count() + 1;
		$storyState->save();
		$this->notifications[] = [
			'message' => sprintf("Story state %s has been created", $storyState->name),
			'type' => "success",
			"id" => $storyState->id,
			"url" => "#"
		];
		return redirect('/settings')->with('notifications', $this->notifications);
	}
	
	public function storyStatesEdit($id) {
		$storyState = StoryState::find($id);
		if (!$storyState) {
			$this->notifications[] = [
				'message' => "This story state is not available",
				'type' => "danger",
				'url' => "/settings"
			];
			return redirect('/')->with('notifications',$this->notifications);
		}
		$this->data['storyState'] = $storyState;
		return view('settings.storyStates.edit')->with('data',$this->data);
	}
	
	public function storyStatesUpdates(Request $request, $id) {
		$storyState = StoryState::find($id);
		$storyState->name = $request->name;
		$storyState->save();
		$this->notifications[] = [
			'message' => "Story state updated",
			'type' => "success",
			"url" => "/"
		];
		return redirect('/settings')->with('notifications', $this->notifications);
	}
	
	public function storyStatesDelete($id) {
		$storyState = StoryState::find($id);
		if (!$storyState) {
			$this->notifications[] = [
				'message' => "This story state is not available",
				'type' => "danger",
				'url' => "/settings"
			];
			return redirect('/')->with('notifications',$this->notifications);
		}
		$storyState->delete();
		$this->notifications[] = [
			'message' => "Story state deleted",
			'type' => "success",
			"url" => "/"
		];
		return redirect('/settings')->with('notifications', $this->notifications);
	}
}
