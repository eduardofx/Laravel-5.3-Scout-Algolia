<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Courses extends Controller
{
    public function index(Request $request){

    	$str = $request->get('str', "");

    	if($str){
    	
    		/*
    			$courses = \App\Course::where('name','like','%'.$str.'%')->
    		orWhere('description','like','%'.$str.'%')->
    		orWhere('author','like','%'.$str.'%')->get();
    		*/

    		$courses = \App\Course::search($str)->get();
    	}else{
    		$courses = \App\Course::all();	
    	}

    	
    	//return view('courses.index', ['courses' => $courses, 'str' => $str]);
		return view('courses.algolia', ['courses' => $courses, 'str' => $str]);
    }
}
