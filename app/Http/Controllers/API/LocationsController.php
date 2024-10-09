<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Zone;
use App\Models\Governorate;
use App\Models\City;
use App\Models\District;
class LocationsController extends Controller
{
    // Get All Zones
    public function getAllZones()
    {
        $zones = Zone::all();
        return response()->json($zones);
    }

    // Fetch governorates based on selected zone
    public function getGovernoratesByZoneId($zoneId)
    {
        $governorates = Governorate::where('zone_id', $zoneId)->get();
        return response()->json($governorates);
    }

    // Fetch cities based on selected governorate
    public function getCitiesByGovernorateId($governorateId)
    {
        $cities = City::where('governorate_id', $governorateId)->get();
        return response()->json($cities);
    }

    // Fetch districts based on selected city
    public function getDistrictsByCityId($cityId)
    {
        $districts = District::where('city_id', $cityId)->get();
        return response()->json($districts);
    }

}
