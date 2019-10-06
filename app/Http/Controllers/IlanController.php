<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ilan;
use App\City;
use App\User;
use App\Nakliyeci;
use App\Teklif;
use Illuminate\Support\Facades\Auth;
class IlanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function ekle(Request $request)
    {
        $mesaj = new Ilan();
        $this->validate($request, [
            'yukleme' => 'required',
            'indirme' => 'required',
            'tarih'=> 'required',
            'tip' => 'required',
            'hacim' => 'required',
            'agirlik' => 'required',
            'aciklama' => 'required',



        ]);
        if($request->yukleme>=0 && $request->yukleme<81 && $request->indirme>=0 && $request->indirme<81 && $request->tip>=0 && $request->tip<3) {
            $mesaj->yukleme = $request->yukleme + 1;
            $mesaj->indirme = $request->indirme + 1;
            $mesaj->zaman = $request->tarih;
            $mesaj->tip = $request->tip;
            $mesaj->hacim = $request->hacim;
            $mesaj->agirlik = $request->agirlik;
            $mesaj->aciklama = $request->aciklama;
            $mesaj->uyeid =Auth::id();


            //getting timestamp

            $mesaj->save();
            return redirect('/ilanlarim');
        }
        else
            return view('errors.503');
    }


    public function bul(Request $request)
    {
        $yer = $request->yukleme;
        $zaman = $request->tarih;
        $aractip=Nakliyeci::where('uyeid',Auth::id())->firstOrFail();
        $aractipi=$aractip->tip;

        $bulunan = Ilan::where([
            ['yukleme', $yer+1],
            ['zaman', $zaman],
            ['tip', $aractipi]
        ])->get();
        $yuklenen = City::whereid($yer + 1)->firstOrFail();
        $yuksehir = $yuklenen->il;
        $i=0;
        $uygun=999999;
        foreach ($bulunan as $b){
            $ind=$b->indirilen;
            $kis=$b->uyeid;
            $indirilen[$i] = City::whereid($ind + 1)->firstOrFail();
            $insehir[$i]=$indirilen[$i]->il;
            $teklif=Teklif::where('ilanid',$b->id)->get();

            if($teklif=='[]')
                $enuygun[$i]="henüz bir teklif yok";
            else {

                foreach ($teklif as $t) {
                    if ($t->miktar < $uygun)
                        $uygun = $t->miktar;


                }
                $enuygun[$i] = $uygun;
            }
            $kisi[$i]=User::whereid($kis)->firstOrFail();
            $i=$i+1;
        }

        return view('aramasonuc',compact('bulunan','yuksehir','insehir','kisi','enuygun'));
    }

    public function duzenle(Request $request)
    {

        $this->validate($request, [
            'ilanid' => 'required'
        ]);
        $id=$request->ilanid;
        $duzenle=Ilan::whereid($id)->firstOrFail();
        $teklif=Teklif::where('ilanid',$id)->get();
        if($duzenle->uyeid==Auth::id() && $teklif=='[]') {
            $iller=City::pluck('il');

            return view('duzenle',compact('duzenle','iller'));
        }
        else
            return view('errors.503');

    }
    public function guncelle(Request $request)
    {

        $this->validate($request, [
            'ilanid' => 'required',
            'yukleme' => 'required',
            'indirme' => 'required',
            'tarih'=> 'required',
            'tip' => 'required',
            'hacim' => 'required',
            'agirlik' => 'required',
            'aciklama' => 'required',



        ]);
        $id=$request->ilanid;
        $duzenle=Ilan::whereid($id)->firstOrFail();
        if($duzenle->uyeid==Auth::id()) {
            if ($request->yukleme >= 0 && $request->yukleme < 81 && $request->indirme >= 0 && $request->indirme < 81 && $request->tip >= 0 && $request->tip < 3) {
                $yukleme = $request->yukleme + 1;
                $indirme = $request->indirme + 1;
                $zaman = $request->tarih;
                $tip = $request->tip+1;
                $hacim = $request->hacim;
                $agirlik = $request->agirlik;
                $aciklama = $request->aciklama;



                //getting timestamp

               Ilan::whereid($id)->update(['yukleme' => $yukleme,
                   'indirme' => $indirme,
               'zaman' => $zaman,
                   'tip' => $tip,
                   'hacim' => $hacim,
                   'agirlik' => $agirlik,
                   'aciklama' => $aciklama,
                   'uyeid' => Auth::id()]);

                return redirect('/ilanlarim');
            }
            else
                return view('errors.503');
        }
        else
            return view('errors.503');
    }
}
