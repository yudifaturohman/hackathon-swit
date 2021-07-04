<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\PenyediaJasa;
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
        return view('front-layouts/hotel', compact('listTravelAdvisor'));
    }

    public function pageDetailHotel($location_id)
    {
        $detailApiListTravelAdvisor = Http::withHeaders([
            'x-rapidapi-key' => 'f331993f12mshcbec11f26fac5d9p16ed0fjsn49ef1fa3f32d',
            'x-rapidapi-host' => 'travel-advisor.p.rapidapi.com'
        ])->get('https://travel-advisor.p.rapidapi.com/hotels/get-details', [
            'location_id' => $location_id,
            'currency' => 'IDR',
        ]);

        $detailListTravelAdvisor = $detailApiListTravelAdvisor->json();

        return view('front-layouts/detail-hotel', compact('detailListTravelAdvisor'));
    }

    public function pagePenyediaJasa()
    {
        $penyediaJasa = PenyediaJasa::select('penyedia_jasa.*', 'pengguna.nama')
        ->join('pengguna', 'pengguna.idPengguna', '=', 'penyedia_jasa.idPengguna')
        ->orderBy('namaToko','ASC')
        ->paginate(10);

        return view('front-layouts/penyedia-jasa', compact('penyediaJasa'));
    }

    public function pageDetailProduk($detail_id)
    {
        $penyediaJasa = PenyediaJasa::select('penyedia_jasa.*', 'pengguna.nama')
        ->join('pengguna', 'pengguna.idPengguna', '=', 'penyedia_jasa.idPengguna')
        ->orderBy('namaToko','ASC')
        ->where('penyedia_jasa.idJasa', $detail_id)
        ->first();

        $penyediaJasaBarang = Barang::select('barang.*', 'penyedia_jasa.namaToko', 'penyedia_jasa.idJasa' ,'pengguna.nama')
        ->join('penyedia_jasa', 'penyedia_jasa.idJasa', '=', 'barang.idJasa')
        ->join('pengguna', 'pengguna.idPengguna', '=', 'penyedia_jasa.idPengguna')
        ->orderBy('namaToko','ASC')
        ->where('penyedia_jasa.idJasa', $detail_id)
        ->paginate(10);

        return view('front-layouts/detail-jasa', compact('penyediaJasaBarang', 'penyediaJasa'));
    }
}
