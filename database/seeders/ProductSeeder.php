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
			'nombre'=>'Corsair',
			'precio'=>400000,
			'stock'=>'SI',
			'descripcion'=>'Teclado ergonomico y facil de usar',
		]);
		DB::table('products')->insert([
			'category_id'=> 2,
			'nombre'=>'Lg',
			'precio'=>450000,
			'stock'=>'SI',
			'descripcion'=>'Buen producto, gran calidad de imagen y muy buenos colores',
		]);
		DB::table('products')->insert([
            'category_id'=> 3,
			'nombre'=>'VSG',
			'precio'=>450000,
			'stock'=>'SI',
			'descripcion'=>'Un mause increible, comodo y larga duracion de la bateria',
		]);
		DB::table('products')->insert([
            'category_id'=> 1,
            'imagenProduct'=> 'Teclado.jpg',
			'nombre'=>'Red Dragon',
			'precio'=>120000,
			'stock'=>'NO',
			'descripcion'=>'Buen producto, las teclas son comodas aunque un poco ruidoso',
		]);
		DB::table('products')->insert([
            'category_id'=> 4,
            'imagenProduct'=> 'audifonos.jpg',
			'nombre'=>'corsair',
			'precio'=>750000,
			'stock'=>'NO',
			'descripcion'=>'Buen producto, gran calidad de audio',
		]);
	}
}
