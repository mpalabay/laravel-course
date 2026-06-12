<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class PawiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create a few sample users if they don't exist
        $users = User::count() < 6
            ? collect([
                User::create([
                    'name' => 'Alice Santos',
                    'email' => 'alice@example.com',
                    'password' => bcrypt('test123'),
                ]),
                User::create([
                    'name' => 'Bob Del Monte',
                    'email' => 'bob@example.com',
                    'password' => bcrypt('test123'),
                ]),
                User::create([
                    'name' => 'Charlie Hernandez',
                    'email' => 'charlie@example.com',
                    'password' => bcrypt('test123'),
                ]),
                User::create([
                    'name' => 'Miguel Cruz',
                    'email' => 'miguel@example.com',
                    'password' => bcrypt('test123'),
                ]),
                User::create([
                    'name' => 'Angela Santos',
                    'email' => 'angela@example.com',
                    'password' => bcrypt('test123'),
                ]),
                User::create([
                    'name' => 'Carlo Reyes',
                    'email' => 'carlo@example.com',
                    'password' => bcrypt('test123'),
                ]),
                
            ])
            : User::take(3)->get();

        // Sample pawis
        $pawis = [
            'Hoping tomorrow feels lighter.',
            'Maybe it\'s time to pause and breathe.',
            'Proud of myself.',
            'Finally finished something I kept delaying.',
            'Small win today.',
            'I\'ve been overthinking a lot lately.',
        ];

        // Create pawis for random users
        foreach ($pawis as $message) {
            $users->random()->pawis()->create([
                'message' => $message,
                'created_at' => now()->subMinutes(rand(5, 1440)),
            ]);
        }
    }
}
