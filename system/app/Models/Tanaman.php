<?php

namespace App\Models;
use App\Models\Traits\Attributes\TanamanAttributes;
use App\Models\Traits\Relations\TanamanRelations;

class Tanaman extends Model{

	use TanamanAttributes, TanamanRelations;

	protected $table = 'tanaman';

	
}