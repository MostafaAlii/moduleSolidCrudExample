<?php

namespace Database\Seeders;

use Country\Entities\Country;
use Illuminate\Database\Seeder;
use Modules\City\Entities\City;

use Modules\State\Entities\State;

class StatusWordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countyArray = ['Egypt', 'Iraq', 'Saudi Arabia', 'Algeria'];
        Country::whereHas('states')->whereIn('name', $countyArray)->update([
            'status' => true,
        ]);

        State::select('states.*')->whereHas('citys')
            ->join('countries', 'states.country_id', '=', 'countries.id')
            ->where('countries.status', 1)
            ->update(['states.status' => true]);


        City::select('cities.*')
            ->join('states', 'cities.state_id', '=', 'states.id')
            ->where('states.status', 1)
            ->update(['cities.status' => true]);
    }
}
