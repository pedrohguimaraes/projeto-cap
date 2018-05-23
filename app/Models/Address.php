<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model{
    public $timestamps = false;
	protected $table = 'address';
	protected $fillable = [
		'id',
		'street',
		'number',
		'neighborhood',
		'city'
		
	];
}
