<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Person;

class PersonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Person::create([
            'first_name' => 'Roseline',
            'last_name' => 'duprès',
        ]);

        Person::create([
            'first_name' => 'Edouard',
            'last_name' => 'Duchène',
        ]);
    }
}
