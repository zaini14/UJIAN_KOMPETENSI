<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'nama_petugas' => 'admin',
        	'username' => 'admin',
        	'password' => Hash::make('admin123'),
        	'level' => 'admin',
            'profile' => 'zaini.jpg'
        ]);
    }
}
