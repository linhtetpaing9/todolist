<?php

namespace LinHtetPaing\Todolist;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
	protected $table = 'tasks';
	protected $fillable = [
		'name'
	];
}
