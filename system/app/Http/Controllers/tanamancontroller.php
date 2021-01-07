<?php

namespace App\Http\Controllers;
use App\Models\Tanaman;

class tanamancontroller extends Controller {
	function index(){
		$data['list_tanaman'] = Tanaman::all();
		return view('Admin.Tanaman.index',$data);
	}

	function showhairstyle(){
		$data['list_tanaman'] = Tanaman::all();
		return view('Client.tanaman',$data);
	}

	function create(){
		return view('Admin.Tanaman.create');

	}

	function store(){
		$tanaman = new Tanaman;
		$tanaman-> nama = request('nama');
		$tanaman-> handleUploadFoto();
		$tanaman-> save();


		return redirect ('Admin/tanaman')-> with ('success', 'Data berhasil ditambahkan');
	}


	function show(Tanaman $tanaman){
		$data['tanaman'] = $tanaman;
		return view('Admin.Tanaman.show', $data);

	}

	function edit(Tanaman $tanaman){
		$data['tanaman'] = $tanaman;
		return view('Admin.Tanaman.edit', $data);
	}

	function update(Tanaman $tanaman){
		$tanaman-> nama = request('nama');
		$tanaman->handleUploadFoto();
		$tanaman-> save();


		return redirect ('Admin/tanaman')-> with ('success', 'Data berhasil diedit');

	}

	function destroy(Tanaman $tanaman){
		$tanaman->handleDeleteFoto();
		$tanaman->delete();

		return redirect ('Admin/tanaman')-> with ('danger', 'Data berhasil dihapus');

	}
}