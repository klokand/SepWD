<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Input;
use Redirect;
use Validator;
use App\Blog;

class BlogController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}
	 
	public function index()
	{
		return view('home');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input,Blog::$blog_rules);
		if($validation->passes()){
			
				$image = Input::file('coverImage');
				$extension = $image->getClientOriginalExtension();
				$filename = sha1(time().time()).".{$extension}";
				$upload_success=\Image::make($image)->resize(700,500)->save(\Config::get('image.news_image').$filename);

			if($upload_success){
					Blog::create(array(
						'author' => Input::get('author'),
						'content'=>Input::get('content'),
						'title'=>Input::get('title'),
						'coverImage'=>$filename,
					));
				return Redirect::to('blog');
				}
		}else{
			$error = $validation->errors()->first();
			return Redirect::to('blog')->withInput(Input::all())->with(compact('error'));
		}	
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
