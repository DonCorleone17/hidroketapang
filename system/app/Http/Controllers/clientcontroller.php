<?php 

namespace App\Http\Controllers;
use App\Models\Barber;
use App\Models\User;

class clientcontroller extends Controller
{
	function showberanda(){
		return view('Client/beranda');
	}

	function showbarber(Barber $barber){
		$data['barber'] = $barber;
		dd($data);
		return view('Client/barber', $data);
	}
	
	function showhairstyle(){
		return view('Client/hairstyle');
	}

	function filter(){
		$tag = request ('id_tempat');
		$data['id_tempat'] = $tempat;
		$data['list_tempat'] = Tempat::all();
		$data['list_barber'] = Konten::where('id_tempat', "$tempat")->get();
		return view('Client/index', $data);
	}
}
