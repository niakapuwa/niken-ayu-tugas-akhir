<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->insert([
            'nama' => 'Kim Jong Dae',
            'alamat' => 'Korea',
            'no_hp' => '082356268926',
            'gender' => 'Pria',
            'email' => 'jongdae@gmail.com',
            'password' => Hash::make('jongdae'),
            'created_at' => date('Y-m-d H:i:s')
        ]);
    }
}
