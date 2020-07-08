<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayoutController extends Controller
{
	public function index(){
		return view ('blank-page');
	}

	public function list_teacher(){
		return view ('admin.list-teacher');
	}

	public function add_teacher(){
		return view ('admin.add-teacher');
	}


}
