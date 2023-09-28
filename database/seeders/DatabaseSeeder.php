<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // \App\Models\User::create(
        // [
        //     'nip' => 'Admin',
        //     'name' => 'Admin',
        //     'email' => 'adminsimpeg@gmail.com',
        //     'password' => bcrypt('123456'),
        //     'level' => 'Admin',
        //     'telp' => '085271695756',
        // ],);

        \App\Models\User::create(
            [
                'nip' => '2001092041',
                'name' => 'SYAHENDRA',
                'email' => 'syahendra@gmail.com',
                'password' => bcrypt('123456'),
                'level' => 'WaliNagari',
                'telp' => '085271695756',
            ],);
    }
}
