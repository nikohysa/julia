<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    //
	protected $table = 'stories';

	protected $fillable = [
		'title','project_id','user_id','created_by','description'
	];

}
