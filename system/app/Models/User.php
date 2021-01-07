<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\UserDetail;
use App\Models\Konten;

class User extends Authenticatable
{
    protected $table = 'user';
    use HasFactory, Notifiable;

    function seller(){
        return $this->hasMany(Seller::class , 'id_user');
    }
}