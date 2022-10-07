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
		'imagenProduct',
		'nombre',
		'precio',
		'stock',
		'descripcion',
	];
	public function category()
	{
		return $this->hasOne(Category::class);
	}
}
