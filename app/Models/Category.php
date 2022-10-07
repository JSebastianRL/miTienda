<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
	use HasFactory, SoftDeletes;

	protected $fillable = [
		'name'
	];
	public function products()
	{
		return $this->belongsTo(Product::class);
	}
}
