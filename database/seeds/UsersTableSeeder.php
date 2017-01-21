<?php
use App\User;
use Illuminate\Database\Seeder;

/**
 * Created by PhpStorm.
 * User: mammut
 * Date: 21.01.17
 * Time: 10:06
 */
class UsersTableSeeder extends Seeder
{
	public function run()
	{
		User::create([
			'name'     => 'admin',
			'email'    => 'ukrainianspaceconf@gmail.com',
			'password' => bcrypt('12345678')
		]);
	}
}