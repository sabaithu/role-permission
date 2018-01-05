<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // $this->call(UsersTableSeeder::class);
        //Role comes before user seeder here.
        $this->call(RoleTableSeeder::class);
        //User Seeder will use the roles above crated.
        $this->call(UserTableSeeder::class);

    }
}
