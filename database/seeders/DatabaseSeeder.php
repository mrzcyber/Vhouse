<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'ciro@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

        for ($i = 1; $i <= 5; $i++) {
            $property = \App\Models\Property::create([
                'name' => 'Rumah Idaman Tipe ' . (36 + $i * 10),
                'lt' => 60 + ($i * 10),
                'lb' => 36 + ($i * 10),
                'floors' => 1,
                'bedrooms' => 2,
                'bathrooms' => 1,
                'carports' => 1,
                'description' => 'Rumah minimalis modern yang sangat nyaman untuk keluarga baru.',
                'price' => 350000000 + ($i * 50000000),
                'thumbnail' => null,
            ]);

            \App\Models\PropertyImage::create([
                'property_id' => $property->id,
                'image' => 'dummy/image' . $i . '.jpg',
            ]);
        }
    }
}
