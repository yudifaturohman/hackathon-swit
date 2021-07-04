<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Http;

class PageFrontend extends Controller
{
    public function index()
    {
        return view('front-layouts/home');
    }

    public function pageHotel(Request $request)
    {
        $apiListTravelAdvisor = Http::withHeaders([
            'x-rapidapi-key' => 'f331993f12mshcbec11f26fac5d9p16ed0fjsn49ef1fa3f32d',
            'x-rapidapi-host' => 'travel-advisor.p.rapidapi.com'
        ])->get('https://travel-advisor.p.rapidapi.com/locations/search', [
            'query' => $request->pencarian,
            'limit' => '30',
            'offset' => '0',
            'units' => 'km',
            'location_id' => '1',
            'currency' => 'IDR',
            'sort' => 'recomended',
            'lang' => 'ind'
        ]);

        $listTravelAdvisor = $apiListTravelAdvisor->json();
        // $filtered = Arr::except($listTravelAdvisor, ['ad_position', 'ad_size', 'doubleclick_zone', 'ancestors', 'detail', 'page_type', 'mob_ptype']);
        // $collect = collect($listTravelAdvisor);
        // $filtered = $collect->except(['ad_position', 'ad_size', 'doubleclick_zone', 'ancestors', 'detail', 'page_type', 'mob_ptype'])->toArray();
        // $listTravelAdvisor = json_decode($apiListTravelAdvisor->getBody());
        // dd($listTravelAdvisor);
        return view('front-layouts/hotel', compact('listTravelAdvisor'));
    }
}
