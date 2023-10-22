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
            'name' => 'Workshop Himpuanan Mahasiswa Teknik Informatika',
            'description' => 'lorem ipsum',
            'logo' => 'logo.png',
            'alamat' => 'Jl. Raya Puspitek, Serpong, Kota Tangerang Selatan, Banten 15314',
            'email' => 'AdminHMIF@gmail.com',
            'telepon' => '023749270',
            'maps_embed' => 'maps.com'
        ]);
    }
}
