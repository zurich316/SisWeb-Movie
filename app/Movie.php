<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model {

	protected $fillable = ['name','description','user_id'];
	
	public function user()
	{
		return $this->belongsTo('App\User');
	}

	public function review()
	{
		return $this->hasMany('App\Review');
	}
	public function rating()
	{
		return $this->hasMany('App\Rating');
	}
}
