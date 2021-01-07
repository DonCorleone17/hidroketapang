<?php

namespace App\Models;

use App\Models\Traits\Attributes\SellerAttributes;
use App\Models\Traits\Relations\SellerRelations;

class Seller extends Model{

	use SellerAttributes, SellerRelations;

	protected $table = 'seller';

	protected $casts = [
		'created_at' => 'datetime',
		'updated_at' => 'datetime',
	];
	
}