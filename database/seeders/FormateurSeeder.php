<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FormateurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Formateur::factory()->createMany([
            [
                'nom' => 'formateur1',
                'prenom' => 'gestion',
                'email' => 'formateur1@gmail.com',
                'password' => Hash::make('formateur1'),
                'admin_id' => 1
            ],
            [
                'nom' => 'formateur2',
                'prenom' => 'dev',
                'email' => 'formateur2@gmail.com',
                'password' => Hash::make('formateur2'),
                'admin_id' => 1
            ]
        ]);
    }
}