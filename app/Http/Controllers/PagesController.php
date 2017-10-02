<?php

namespace App\Http\Controllers;

class PagesController extends Controller {

	public function  getIndex(){
		 return view('pages/welcome');
	}

	public function  gettablee(){

			$first='Amit';
			$last='Kumar';
			$fullname='Amit';
			$email='amitkth19@gmail.com';
			$data=[];
			$data['email']= $email;
			$data['full']= $fullname;
		   return view('pages/tablee')->withData($data);
	}

	public function  getlistt(){
		return view('pages/listt');
	}
}