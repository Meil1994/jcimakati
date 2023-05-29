<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Contact;
use App\Models\Membership;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Membership::create([
            'id' => 1,
            'first_name' => 'John',
            'last_name' => 'Doe',
            'contact' => '09369361714',
            'email' => 'meil@gmail.com',
            'reason' => 'I just want to join',
        ]);

        Contact::create([
            'id' => 1,
            'first_name' => 'John',
            'last_name' => 'Doe',
            'contact' => '09369361714',
            'email' => 'meil@gmail.com',
            'comments' => 'I just want to join',
        ]);
    }

    
}
