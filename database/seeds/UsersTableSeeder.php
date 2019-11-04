<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		//
		$users = factory(User::class)->times(50)->make();
		User::insert($users->makeVisible(['password', 'remeber_token'])->toArray());
		
		$user = User::find(1);
		$user->name = '胖虎';
		$user->email = 'hx@aumc.cc';
		$user->password = bcrypt('jiang1997');
		$user->is_admin = true;
		$user->save();
	}
}
