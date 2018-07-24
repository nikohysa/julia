<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    //
	const NA = "<label class='badge badge-danger'>NOT_AVAILABLE</label>";

	public function getStoryId() {
		return "S".$this->attributes['id'];
	}

	public function getTitle() {
		return ($this->attributes['title'])
			? $this->attributes['title']
			: self::NA;
	}

	public function getShortDescription() {
		return strip_tags(substr($this->attributes['description'],0,20))."...";
	}

	public function getCreatedBy() {
		$user = User::find($this->attributes['created_by']);
		return (isset($user)
				? $user->name
				: self::NA);
	}

	public function getAssignedTo() {
		$user = User::find($this->attributes['user_id']);
		return (isset($user)
			? $user->name
			: self::NA);
	}

	public function getState() {
		return StoryState::find($this->status_id);

	}


}
