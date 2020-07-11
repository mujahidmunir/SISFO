<?php

namespace App\Http\Controllers;

use App\Classes;
use App\Subject;
use App\Year;
use Illuminate\Http\Request;

class AdminController extends Controller
{
	// class controller
	public function list_class(){
		$cls = Classes::all();
		$no=1;
		return view ('admin.list-class', compact( ['cls','no']));
	}

	public function add_class(Request $request){
		$cls = Classes::create($request->all());
			if($cls){
		    return redirect('daftar-kelas')->withSuccess('Data Berhasil Disimpan');
			}
	}

	public function edit_class(Request $request, $id){
		$cls = Classes::whereClsId($id)->first();
		$cls->cls_name = $request->input('cls_name');
		$cls->save();
		return redirect('daftar-kelas')->withSuccess('Data Berhasil Disimpan');
	}

	//subject controller
	public function list_subject(){
		$sbj = Subject::orderBy('sbj_name','ASC')->get();
		$no = 1;
		return view ('admin.list-subject', compact(['sbj','no']));
	}

	public function save_subject(Request $request){
		$cek = Subject::create($request->all());
		if ($cek){
			return redirect('daftar-mapel')->withSuccess('Data Berhasil Disimpan');
		}
	}

	public function update_subject(Request $request, $id){
		$sbj = Subject::whereSbjId($id)->first();
		$sbj->sbj_name			= $request->input('sbj_name');
		$sbj->sbj_description	= $request->input('sbj_description');
		$sbj->save();
		return redirect('daftar-mapel')->withSuccess('Data Berhasil Dirubah');
	}


	//list years

	public function list_years(){
		$yrs = Year::orderBy('yrs_name','DESC')->get();
		$no=1;
		return view('admin.list-years', compact(['yrs','no']));
	}

	public function add_year(Request $request){
		Year::create($request->all());
		return redirect('tahun-ajaran')->withSuccess('Tahun Ajaran Berhasil Ditambah');
	}

	public function update_year(Request $request, $id)
	{
		$yrs = Year::whereYrsId($id)->first();
		$yrs->yrs_name = $request->input('yrs_name');
		$yrs->save();
		return redirect('tahun-ajaran')->withSuccess('Tahun Ajaran Berhasil Dirubah');
	}



}
