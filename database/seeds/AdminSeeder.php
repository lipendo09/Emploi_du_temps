<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('Admins')->insert([
            'name' => 'Admin',
            'email' => 'directeurAdjoint@gmail.com',
            'password' => Hash::make('admin'),
        ]);
    }
}
