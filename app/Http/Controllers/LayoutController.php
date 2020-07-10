<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class LayoutController extends Controller
{
	public function index(){
		Alert::question('Question Title', 'Question Message');
		return view ('blank-page');
	}

	public function dashboard(){
		return view ('admin.dashboard');
	}

	public function list_teacher(){
		return view ('admin.list-teacher');
	}

	public function add_teacher(){
		return view ('admin.add-teacher');
	}
	
	public function add_student(){
		return view('admin.add-student');
	}

	public function list_student(){
		return view ('admin.list-students');
	}

	public function list_class(){
		//Alert::success('Success Title', 'Success Message');
		return view ('admin.list-class');
	}

	public function list_subject(){
		return view ('admin.list-subject');
	}

	public function tahun_ajaran(){
		return view ('admin.class-year');
	}

	public function detail_teacher(){
		return view ('admin.detail-teacher');
	}

	public function delete(Request $request){
		
		return redirect('daftar-kelas')->withSuccess('Task Created Successfully!');
	}
	

	


}
