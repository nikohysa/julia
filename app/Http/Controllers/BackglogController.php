<?php
/**
 * Created by PhpStorm.
 * User: xhdus
 * Date: 07/22/2018
 * Time: 10:33 AM
 */

namespace App\Http\Controllers;


use App\Project;
use App\Sprint;
use App\Story;
use App\StoryState;

class BackglogController extends AuthenticatedController {

	public function index() {
		$this->data['stories'] = Story::all();
		$this->data['states'] = StoryState::all();
		$this->data['sprints'] = Sprint::all();
		return view('backglog/index')->with('data',$this->data);
	}

}
