<?php

namespace App\Http\Controllers;
use App\Models\Seller;
use App\Models\User;

class sellercontroller extends Controller {
	function index(){
		$user = request()->User();
		$data['list_seller'] = $user->seller;
		return view('Admin.Seller.index', $data);
	}

	function indexseller(){
		$data['list_seller'] = Seller::all();
		return view('Client.seller', $data);
		
	}

	function create(){
		return view('Admin.Seller.create');

	}

	function store(){
		$seller = new Seller;
		$seller-> id_user = request()->user()->id;
		$seller-> nama = request('nama');
		$seller-> owner = request('owner');
		$seller-> alamat = request('alamat');
		$seller-> fasilitas = request('fasilitas');
		$seller-> harga = request('harga');

		$seller->handleUploadFoto();
		$seller-> save();

		return redirect ('Admin/seller')-> with ('success', 'Barber berhasil ditambahkan');

	}

	function show(Seller $seller){
		$data['seller'] = $seller;

		return view('Admin.Seller.show', $data);
	}

	function showseller(Seller $seller){
		$data['seller'] = $seller;

		return view('Client.desc', $data);
	}

	function edit(Seller $seller){
		$data['seller'] = $seller;
		return view('Admin.Seller.edit', $data);
	}

	function update(Seller $seller){
		$seller-> nama = request('nama');
		$seller-> owner = request('owner');
		$seller-> alamat = request('alamat');
		$seller-> fasilitas = request('fasilitas');
		$seller-> harga = request('harga');

		$seller->handleUploadFoto();
		$seller-> save();

		return redirect ('Admin/seller')-> with ('success', 'Barber berhasil diedit');

	}

	function destroy(Seller $seller){
		$seller->handleDeleteFoto();
		$seller->delete();

		return redirect ('Admin/seller')-> with ('danger', 'Data berhasil dihapus');

	}

	function filter(){
		$tempat = request ('id_tempat');
		$data['id_tempat'] = $tempat;
		$data['list_tempat'] = Tempat::all();
		$data['list_seller'] = Seller::where('id_tempat', "$tempat")->get();
		return view('Admin.Seller.index', $data);
	}
}