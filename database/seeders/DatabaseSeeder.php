<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Kategori;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'nama' => 'Administrator',
            'email' => 'admin@gmail.com',
            'role' => '1',
            'status' => 1,
            'hp' => '082336618276',
            'password' => bcrypt('P@55word')
        ]);

        User::create([
            'nama' => 'Muhammad Fakih',
            'email' => 'fakih@gmail.com',
            'role' => '0',
            'status' => 1,
            'hp' => '082336618277',
            'password' => bcrypt('P@55word')
        ]);
        User::create([
            'nama' => 'Muhammad Fakih',
            'email' => 'fakih2@gmail.com',
            'role' => '0',
            'status' => 0,
            'hp' => '082336618277',
            'password' => bcrypt('12345')


        ]);


        #data kategori
        Kategori::create([
            'nama_kategori' => 'Brownies',
        ]);
        Kategori::create([
            'nama_kategori' => 'Combro',
        ]);
        Kategori::create([
            'nama_kategori' => 'Dawet',
        ]);
        Kategori::create([
            'nama_kategori' => 'Mochi',
        ]);
        Kategori::create([
            'nama_kategori' => 'Wingko',
        ]);
    }
}
