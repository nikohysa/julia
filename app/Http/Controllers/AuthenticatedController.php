<?php
/**
 * Created by PhpStorm.
 * User: xhdus
 * Date: 07/22/2018
 * Time: 12:11 PM
 */

namespace App\Http\Controllers;


use App\Project;
use App\StoryState;

class AuthenticatedController extends Controller {

	protected $data;

	public function __construct() {
		$this->middleware('auth');
		$this->data = [
			'projects' => Project::all()
		];
		$this->notifications = [];
		if (!count(StoryState::all())) {
			$this->notifications[] = [
				'message' => "Please create at least one story state before proceding",
				'type' => "danger",
				'url' => "/settings"
			];
		}
	}
}
