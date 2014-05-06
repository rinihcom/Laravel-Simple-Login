<?php

class UserTableSeeder extends Seeder {

	public function run()
	{
		DB::table('users')->delete();
		// $this->call('UserTableSeeder');
		User::Create(
			array(
				'name' => 'M Fahri',
				'username' => 'fahri',
				'email' => 'fahri.arrasyid@gmail.com',
				'password' => Hash::make('fahri'),
			)
		);
	}

}
