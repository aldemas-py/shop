<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\listing;
use Illuminate\Database\Seeder;
use Database\Factories\Listing_factoryFactory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $user = User::factory()->create([
            'name' => 'John Doe',
            'email' => 'john@gmail.com',
            'password' => '1234567'
        ]);

        Listing::factory(6)->create([
            'user_id' => $user->id
        ]);

        //         listing::create([
        //             'title' => 'Laravel Senior Developer',
        //             'tags' => 'laravel, javascript',
        //             'company' => 'Acme Corp',
        //             'location' => 'Boston, MA',
        //             'email' => 'email1@email.com',
        //             'website' => 'https://www.acme.com',
        //             'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur delensiti?'
        //         ]);
        //         listing::create([
        //             'title' => 'Full-Stack Engineer',
        //             'tags' => 'laravel, backend ,api',
        //             'company' => 'Stark Industries',
        //             'location' => 'New York, NY',
        //             'email' => 'email2@email.com',
        //             'website' => 'https://www.starkindustries.com',
        //             'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur delensiti?'
        //         ]);
        //         listing::create([
        //             'title' => ' Senior  backend Developer',
        //             'tags' => 'laravel, javascript',
        //             'company' => 'Acme Corp',
        //             'location' => 'Boston, MA',
        //             'email' => 'email1@email.com',
        //             'website' => 'https://www.acme.com',
        //             'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur delensiti?'
        //         ]);
        //         listing::create([
        //             'title' => 'Frontend Engineer',
        //             'tags' => 'javascript, backend ,api',
        //             'company' => 'Stark Industries',
        //             'location' => 'New York, NY',
        //             'email' => 'email2@email.com',
        //             'website' => 'https://www.starkindustries.com',
        //             'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur delensiti?'
        //         ]);
        //         listing::create([
        //             'title' => 'java Senior Developer',
        //             'tags' => 'laravel, javascript',
        //             'company' => 'Acme Corp',
        //             'location' => 'Boston, MA',
        //             'email' => 'email1@email.com',
        //             'website' => 'https://www.acme.com',
        //             'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur delensiti?'
        //         ]);
        //         listing::create([
        //             'title' => 'Full-Stack developer',
        //             'tags' => 'laravel, frontend ,api',
        //             'company' => 'Stark Industries',
        //             'location' => 'New York, NY',
        //             'email' => 'email2@email.com',
        //             'website' => 'https://www.starkindustries.com',
        //             'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur delensiti?'
        //         ]);
        //         listing::create([
        //             'title' => ' Senior  frontend Developer',
        //             'tags' => 'laravel, view, javascript',
        //             'company' => 'Acme Corp',
        //             'location' => 'Boston, MA',
        //             'email' => 'email1@email.com',
        //             'website' => 'https://www.acme.com',
        //             'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur delensiti?'
        //         ]);
        //         listing::create([
        //             'title' => 'DevOps Engineer',
        //             'tags' => 'javascript, java ,api',
        //             'company' => 'Stark Industries',
        //             'location' => 'New York, NY',
        //             'email' => 'email2@email.com',
        //             'website' => 'https://www.starkindustries.com',
        //             'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur delensiti?'
        //         ]);
    }
}