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
		$this->middleware('auth',['except' => ['index','show']]);
	}
	
	public function panel()
	{
		$blogs = Blog::where('state','=',1)->orderBy('created_at', 'desc')->paginate(10);
		return view('blogList')->with(compact('blogs'));
	}
	 
	public function index()
	{
		$blogs = Blog::where('state','=',1)->orderBy('created_at', 'desc')->paginate(5);
		return view('blog')->with(compact('blogs'));
	}
	
	public function adminBlogList(){
		return view ('adminBlogList');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view ('createBlog');
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
				$upload_success=\Image::make($image)->resize(900,600)->save(\Config::get('image.blog_image').$filename);

			if($upload_success){
					Blog::create(array(
						'summary' => Input::get('summary'),
						'content'=>Input::get('blogContent'),
						'title'=>Input::get('title'),
						'coverImage'=>$filename,
					));
				return Redirect::to('adminPanel');
				}
		}else{
			$error = $validation->errors()->first();
			return Redirect::to('createBlog')->withInput(Input::all())->with(compact('error'));
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
		$blog = Blog::find($id);
		$title = $blog->title;
		$url = '/blog/'.$blog->id;
		$img = $blog->coverImage;
		$summary = $blog->summary;
		return view('blogDetail')->with(compact('blog','title','url','img','summary'));
		}
	

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$blog = Blog::find($id);
		return view ('updateBlog')->with(compact('blog'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$id = Input::get('id');
		$blog = Blog::find($id);
		$input = Input::all();
		$validation = Validator::make($input,Blog::$blog_update_rules);
		if($validation->passes()){
			if(is_null(Input::file('coverImage'))){
					$blog->title = Input::get('title');
					$blog->summary = Input::get('summary');
					$blog->content = Input::get('blogContent');
					$blog->save();
			}else{
				$image = Input::file('coverImage');
				$extension = $image->getClientOriginalExtension();
				$filename = sha1(time().time()).".{$extension}";
				$upload_success=\Image::make($image)->resize(900,600)->save(\Config::get('image.blog_image').$filename);
			if($upload_success){
					$blog->title = Input::get('title');
					$blog->coverImage = $filename;
					$blog->summary = Input::get('summary');
					$blog->content = Input::get('blogContent');

					$blog->save();
				}
			}
			
			return Redirect::to('adminPanel');
		}else{
			$error = $validation->errors()->first();
			return Redirect::action('BlogController@edit')->withInput(Input::all())->with(compact('error'));
		}	
		
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function suspend($id)
	{
		$blog = Blog::find($id);
		$blog->state=0;
		$blog->save();
		return Redirect::to('adminPanel');
	}

}
