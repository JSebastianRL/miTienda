<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
	use HasFactory, SoftDeletes;
	protected $fillable = [
		'user_id',
		'category_id',
		'nombre',
		'precio',
		'stock',
		'descripción',
	];
	public function User()
	{
		return $this->belongsTo(User::class, 'user_id', 'id');
	}
	public function Category()
	{
		return $this->belongsTo(Category::class, 'category_id', 'id');
	}
}
