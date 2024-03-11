<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(5)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'role'=>'admin',
            'password' => Hash::make('123456'),
            'phone'=>'089613835657'
        ]);

        //seeder profile_clinics manual
        \App\Models\ProfileClinic::factory()->create([
            'name' => 'Klinik KU_',
            'address' => 'Jl. Raya Karadenan No. 1',
            'phone' => '1234567890',
            'email' => 'dr.ugi@klinik.com',
            'doctor_name' => 'Dr. Ugi',
            'unique_code' => '123456',
        ]);

        //call
        $this->call(DoctorSeeder::class);

    }
}
