<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model {

	protected $fillable = ['like'];

	public function user()
	{
		return $this->belongsTo('App\User');
	}

	public function review()
	{
		return $this->belongsTo('App\Review');
	}

}
