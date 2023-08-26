<?php

namespace Database\Seeders;

use App\Models\Trainer;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TrainerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Trainer::create([
           'name' =>   'Michelle Stones',
           'email' => 'MStones@example.com',
           'job' => 'Weighlifting',
           'picture' => 'Images/Michelle Stones.png'
        ]);

        Trainer::create([
            'name' =>   'Amelia Khatib',
            'email' => 'Akhatib@example.com',
            'job' => 'Boxing',
            'picture' => 'Images/Amelia Khatib.png',
         ]);

         Trainer::create([
            'name' =>   'Adam Smith',
            'email' => 'Asmith@example.com',
            'job' => 'Weighlifting',
            'picture' => 'Images/Adam Smith.png'
         ]);

         Trainer::create([
            'name' =>   'Sam Jone',
            'email' => 'Sjone@example.com',
            'job' => 'Treadmill',
            'picture' => 'Images/Sam Jone.png'
         ]);

         Trainer::create([
            'name' =>   'James Martinez',
            'email' => 'Jmartinez@example.com',
            'job' => 'Weighlifting',
            'picture' => 'Images/James Martinez.png',
         ]);

         Trainer::create([
            'name' =>   'Olive Smith',
            'email' => 'Osmith@example.com',
            'job' => 'Treadmill',
            'picture' => 'Images\Olive Smith.png'
         ]);
    }
}
