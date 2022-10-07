<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('users')->insert([
			'name'=> 'Joan Sebastian Rojas Laverde',
			'email'=>'laverdexd@gmail.com',
			'password'=>bcrypt(123456789),
		]);
		DB::table('users')->insert([
			'name'=> 'Maicol',
			'email'=>'maicol@email.com',
			'password'=>bcrypt(12341234),
		]);
		DB::table('users')->insert([
			'name'=> 'Tatiana',
			'email'=>'tatiana@email.com',
			'password'=>bcrypt(12345123),
		]);
	}
}
