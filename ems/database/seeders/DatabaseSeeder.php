<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\City;
use App\Models\Country;
use App\Models\Department;
use App\Models\State;
use App\Models\Team;
use Illuminate\Database\Seeder;

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

        Country::factory(10)->create();

        Country::all()->each(function ($country){
            
            State::factory(10)->create(['country_id' => $country->id]);
        });

        State::all()->each(function ($state){
            
            City::factory(10)->create(['state_id' => $state->id]);
        });

        Department::create(['name'=>'Laravel']);

    }
}
