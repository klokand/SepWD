<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model {

	protected $fillable = array(
		'id','content','author','title','coverImage'
	);
	
	public static $blog_rules = array(
		'content'=>'required|min:10',
		'author'=>'required|min:2',
		'title'=>'required|min:2',
		'coverImage'=>'required|image|max:2000',
	);
	public static $blog_update_rules = array(
		'content'=>'required|min:10',
		'author'=>'required|min:2',
		'title'=>'required|min:2',
		'coverImage'=>'sometimes|image|max:2000',
	);

}
