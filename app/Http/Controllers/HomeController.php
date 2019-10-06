<?php

namespace App\Http\Controllers;
use App\Ilan;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function kontrol()
    {
        $simdi=Carbon::now()->toDateTimeString();
        Ilan::where('zaman','<',$simdi)->delete();
        return view('anasayfa');
    }
}
