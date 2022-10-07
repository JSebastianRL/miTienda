<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Product;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes, HasRoles;


    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password'
    ];
    //Mutador -> ingreso de registro a base de datos
    public function setPasswordAttribute($value)
    {
        $this->attributes['password']= bcrypt($value) ;
    }


}
