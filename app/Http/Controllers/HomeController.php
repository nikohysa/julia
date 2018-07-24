<?php

namespace App\Http\Controllers;

use App\Sprint;
use App\StoryState;
use Illuminate\Http\Request;
use function redirect;

class HomeController extends AuthenticatedController
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$this->data['storyStates'] = StoryState::all();
		$this->notifications = [];
		if (!count(StoryState::all())) {
			$this->notifications[] = [
				'message' => "There are no Story states,please create at least one story state before proceeding",
				'type' => "danger",
				'url' => "/settings"
			];
			redirect('/')->with('notifications', $this->notifications);
		}
	    return view('home')->with('data',$this->data);
    }
}
