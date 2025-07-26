<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Candidate;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create admin user
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@pageant.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
            'is_active' => true,
        ]);

        // Create sample judges
        $judges = [
            ['name' => 'Judge One', 'email' => 'judge1@pageant.com'],
            ['name' => 'Judge Two', 'email' => 'judge2@pageant.com'],
            ['name' => 'Judge Three', 'email' => 'judge3@pageant.com'],
        ];

        foreach ($judges as $judge) {
            User::create([
                'name' => $judge['name'],
                'email' => $judge['email'],
                'password' => Hash::make('password'),
                'role' => 'judge',
                'is_active' => true,
            ]);
        }

        // Create sample candidates
        $candidates = [
            ['candidate_number' => 1, 'name' => 'Maria Santos'],
            ['candidate_number' => 2, 'name' => 'Jessica Rodriguez'],
            ['candidate_number' => 3, 'name' => 'Amanda Johnson'],
            ['candidate_number' => 4, 'name' => 'Sarah Williams'],
            ['candidate_number' => 5, 'name' => 'Emily Davis'],
            ['candidate_number' => 6, 'name' => 'Ashley Brown'],
            ['candidate_number' => 7, 'name' => 'Michelle Wilson'],
            ['candidate_number' => 8, 'name' => 'Jennifer Garcia'],
            ['candidate_number' => 9, 'name' => 'Nicole Martinez'],
            ['candidate_number' => 10, 'name' => 'Stephanie Anderson'],
        ];

        foreach ($candidates as $candidate) {
            Candidate::create([
                'candidate_number' => $candidate['candidate_number'],
                'name' => $candidate['name'],
                'is_active' => true,
            ]);
        }
    }
}

