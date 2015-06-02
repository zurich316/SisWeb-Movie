<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class RatingRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'value'=>'required|integer|between:0,10',
			'movie_id'=>'required'
		];
	}

}
