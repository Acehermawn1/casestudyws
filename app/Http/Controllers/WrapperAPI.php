<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WrapperAPI extends Controller
{
    public function hero(){
        $json = Http::get('https://api.dazelpro.com/mobile-legends/hero')->json();
        return response()->json($json);
    }
    public function role(){
        $json = Http::get('https://api.dazelpro.com/mobile-legends/role')->json();
        return response()->json($json);
    }
    public function specially(){
        $json = Http::get('https://api.dazelpro.com/mobile-legends/specially')->json();
        return response()->json($json);
    }
    public function filterhero($hero_id){
        $json = Http::get('https://api.dazelpro.com/mobile-legends/hero'.$hero_id)->json();
        return response()->json($json);
    }
    public function filterspecially(Request $request){
        $damage = $request->SpeciallyName;
        $json = Http::get('https://api.dazelpro.com/mobile-legends/specially?'.$damage)->json();
        return response()->json($json);
    }
}
