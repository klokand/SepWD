<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PageController extends Controller {

	public function index(){
		return view('index');
	}
	public function practitioners(){
		return view('practitioners');
	}
	public function treatment(){
		return view('treatment');
	}
	public function fertility(){
		return view('fertility');
	}
	public function general(){
		return view('general');
	}
	public function blog(){
		return view('blog');
	}
	public function blogDetail($id){
		$data =[];
		$data['title']='test';
		$data['url']='www.test.com';

		//return view('blogDetail')->with('data',$data);
		return view('blogDetail')->with(['title' =>'Chinese Herbal Medicine--Acu8health',
		'url'=>'http://localhost:8080/blog/5sdfrer','img'=>'http://localhost:8080/img/test1.jpg','summary'=>'this is the summary']);
	}
	public function fees(){
		return view('fees');
	}
	public function contact(){
		return view('contact');
	}

}
