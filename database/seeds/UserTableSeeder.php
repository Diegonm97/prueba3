<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            
            'name'    => 'Admin',
            'email'    => 'asd@asd.com',
            'password'    => '$2y$10$R6ojGQdVFXp7.6qZG.Y5LuVYC1g6tbMG6ybLzIFW.8FHp.otDfq4O',
            ]);
    }
}
