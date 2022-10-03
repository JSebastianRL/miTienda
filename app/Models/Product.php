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
        'category_id',
		'nombre',
		'imagen_product_file',
		'precio',
		'stock',
		'descripcion',
	];
	// public function User()
	// {
	// 	return $this->belongsTo(User::class, 'user_id', 'id');
	// }
	public function Category()
	{
		return $this->belongsTo(Category::class, 'category_id', 'id');
	}
}
