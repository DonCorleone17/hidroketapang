<?php 

namespace App\Http\Controllers;
use App\Models\Seller;

class showsellercontroller extends Controller
{
	function showseller(Seller $seller){
		$data['seller'] = $seller;
		return view('Client/seller', $data);
	}


}