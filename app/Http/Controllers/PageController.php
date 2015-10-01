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
		return view('blogDetail')->with('id',$id);
	}
	public function fees(){
		return view('fees');
	}
	public function contact(){
		return view('contact');
	}

}
