<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Consultant extends Model{
    public $timestamps = false;
	protected $table = 'consultant';
	protected $fillable = [
		'id',
		'name',
		'avatar'
	];
}
