<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;
use App\Nakliyeci;
use Illuminate\Support\Facades\Auth;
class CityController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function getir(){


            $iller = City::pluck('il');
            return view('aracbul', compact('iller'));


    }

    public function gonder()
    {
        $bull = Nakliyeci::where('uyeid', Auth::id())->get();
        if ($bull != '[]') {
            $iller = City::pluck('il');
            return view('yukbul', compact('iller'));
        }
        else return redirect('/nakliyecikayit');
    }
    public function deneme(Request $request){
        $secim=$request->yukleme;

        return with($secim);
    }
}
