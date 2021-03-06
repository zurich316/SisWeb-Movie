<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model {

	protected $fillable = ['content','movie_id'];

	public function movie()
	{
		return $this->belongsTo('App\Movie');
	}

	public function like()
	{
		return $this->hasMany('App\Like');
	}

}
