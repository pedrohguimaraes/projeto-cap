<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model{

	public $timestamps = false;
	protected $table = 'course';
	protected $fillable = [
		'id',
		'title',
		'description',
		'price',
		'start',
		'finish',
		'consultant_id',
		'address_id',
		'category_id'
	];

	public function consultant(){
		return $this->belongsTo('App/Models/Consultant', 'consultant_id');
	}

	public function address(){
		return $this->belongsTo('App/Models/Address', 'address_id');
	}

	public function category(){
		return $this->belongsTo('App/Models/Category', 'category_id');
	}
}
