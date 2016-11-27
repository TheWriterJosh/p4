<?php

use Illuminate\Database\Seeder;

class DestinationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {
      DB::table('destinations')->insert([
      'created_at' => Carbon\Carbon::now()->toDateTimeString(),
      'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
      'destination' => 'Paris',
      'country' => 'France',
      'type' => 'city',
      'year' => 2017,
      'continent' => 'Europe',
      ]);

      DB::table('destinations')->insert([
      'created_at' => Carbon\Carbon::now()->toDateTimeString(),
      'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
      'destination' => 'Khao Sok',
      'country' => 'Thailand',
      'type' => 'National Park',
      'year' => 2018,
      'continent' => 'Asia',
      ]);

      DB::table('destinations')->insert([
      'created_at' => Carbon\Carbon::now()->toDateTimeString(),
      'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
      'destination' => 'Tortuguero',
      'country' => 'Costa Rica',
      'type' => 'Region',
      'year' => 2019,
      'continent' => 'North America',
      ]);
    }
}
