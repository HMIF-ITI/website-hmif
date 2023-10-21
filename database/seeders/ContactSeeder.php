<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contact::create([
            'name' => 'HMIF ITI',
            'description' => 'lorem ipsum',
            'logo' => 'logo.png',
            'alamat' => 'Jl. Cantik',
            'email' => 'AdminHMIF@gmail.com',
            'telepon' => '081310259115',
            'maps_embed' => 'maps.com'
        ]);
    }
}
