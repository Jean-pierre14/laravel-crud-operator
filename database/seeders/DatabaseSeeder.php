<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listings;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(5)->create();

        Listings::factory(12)->create();
        // Listings::create([
        //     'title'=> 'Laravel Senior Developer',
        //     'tags' => 'laravel, javascript',
        //     'company' => 'Acme Corp',
        //     'location' => 'Boston, MA',
        //     'email'=> 'email@example.com',
        //     'website' => 'https://www.acme.com',
        //     'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequatur dolor at aliquid nam, cumque vel eos numquam accusamus ullam autem corporis laudantium aspernatur, ex explicabo molestiae velit natus ab vitae!'
        // ]);
        // Listings::create([
        //     'title'=> 'Full-stack Engineer',
        //     'tags' => 'laravel, backend, api',
        //     'company' => 'Acme Corp',
        //     'location' => 'Boston, MA',
        //     'email'=> 'email23@example.com',
        //     'website' => 'https://www.acme.com',
        //     'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequatur dolor at aliquid nam, cumque vel eos numquam accusamus ullam autem corporis laudantium aspernatur, ex explicabo molestiae velit natus ab vitae!'
        // ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}