<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Input;
use Mail;

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
	
	public function email(){
		$name = Input::get("name");
		$email = Input::get("email");
		$content = Input::get("message");
		$phone = Input::get("phone");
		
		Mail::send('emails.booked',['name'=>$name],function($message){
			$message->to(Input::get("email"), Input::get("name"))->subject('Acu8health enquiry has been received');
		});
		
		Mail::send('emails.booked',['name'=>$name,'email'=>$email,'phone'=>$phone,'content'=>$content],function($message){
			$message->to('info@acu8.com.au', 'Acu8health')->subject('new enquiry!');
		});
		
		
		return "sent out";
	}

}
