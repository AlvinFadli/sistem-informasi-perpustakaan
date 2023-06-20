<?php

namespace Database\Seeders;

use App\Models\Jabatan;
use App\Models\Kategori;
use App\Models\Pegawai;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as Faker;
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
        \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $faker = Faker::create();
        
        \App\Models\Buku::factory(20)->create();
        \App\Models\Pengarang::factory(20)->create();
        \App\Models\Penerbit::factory(15)->create();
        \App\Models\Pegawai::factory(10)->create();
        
        Jabatan::create([
            'nama' => 'Manager Perpustakaan'
        ]);
        Jabatan::create([
            'nama' => 'Pustakawan Senior'
        ]);
        Jabatan::create([
            'nama' => 'Pustakawan'
        ]);
        Jabatan::create([
            'nama' => 'Petugas Keamanan'
        ]);
        Jabatan::create([
            'nama' => 'Petugas Kebersihan'
        ]);
        Kategori::create([
            'nama' => 'Umum'
        ]);
        Kategori::create([
            'nama' => 'Filsafat dan Psikologi'
        ]);
        Kategori::create([
            'nama' => 'Agama'
        ]);
        Kategori::create([
            'nama' => 'Sosial'
        ]);
        Kategori::create([
            'nama' => 'Bahasa'
        ]);
        Kategori::create([
            'nama' => 'Sains dan Matematika'
        ]);
        Kategori::create([
            'nama' => 'Teknologi'
        ]);
        Kategori::create([
            'nama' => 'Literartur dan Sastra'
        ]);
        Kategori::create([
            'nama' => 'Sejarah dan Geografi'
        ]);
        Pegawai::create([
            'nama' => 'Alvin Fadli',
            'jenis_kelamin' => $faker->randomElement(['L','P']),
            'alamat' => $faker->address(),
            'jabatan_id' => '1',
            'email' => $faker->safeEmail(),
        ]);
        Pegawai::create([
            'nama' => 'Dwi Mulya',
            'jenis_kelamin' => $faker->randomElement(['L','P']),
            'alamat' => $faker->address(),
            'jabatan_id' => '2',
            'email' => $faker->safeEmail(),
        ]);
        Pegawai::create([
            'nama' => 'Mulya Dwi',
            'jenis_kelamin' => $faker->randomElement(['L','P']),
            'alamat' => $faker->address(),
            'jabatan_id' => '2',
            'email' => $faker->safeEmail(),
        ]);
    }
}
