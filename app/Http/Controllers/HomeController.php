<?php

namespace App\Http\Controllers;

use App\StoryState;
use Illuminate\Http\Request;

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
    	return view('home')->with('data',$this->data);
    }
}
