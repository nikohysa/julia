<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StoryState extends Model
{
    //
	
	public function getStories() {
		return Story::where('status_id', $this->id)->get();
	}
}
