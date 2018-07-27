<?php

use App\User;
use Illuminate\Database\Seeder;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		User::create([
			'name' => 'Niko Hysa',
			'email' => 'nikohysa@unyt.edu.al',
			'password' => bcrypt('123456'),
		]);

		User::create([
			'name' => 'Marenglen Biba',
			'email' => 'marenglenbiba@unyt.edu.al',
			'password' => bcrypt('123456'),
		]);
    }
}
