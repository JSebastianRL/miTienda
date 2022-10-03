<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('products')->insert([
			'category_id'=> 1,
			'nombre'=>'lg',
			'precio'=>400,
			'stock'=>'SI',
			'descripcion'=>'Monitor grande',
		]);
		DB::table('products')->insert([
			'category_id'=> 3,
			'nombre'=>'corsair',
			'precio'=>450000,
			'stock'=>'NO',
			'descripcion'=>'Buen producto',
		]);
	}
}
