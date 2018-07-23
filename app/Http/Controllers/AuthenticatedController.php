<?php
/**
 * Created by PhpStorm.
 * User: xhdus
 * Date: 07/22/2018
 * Time: 12:11 PM
 */

namespace App\Http\Controllers;


use App\Project;

class AuthenticatedController extends Controller {

	protected $data;

	public function __construct() {
		$this->middleware('auth');
		$this->data = [
			'projects' => Project::all()
		];
	}
}