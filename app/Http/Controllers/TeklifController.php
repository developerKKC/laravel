<?php

namespace App\Http\Controllers;

use App\Nakliyeci;
use Illuminate\Http\Request;
use App\Teklif;
use App\Ilan;
use App\City;
use App\Tamamlanan;
use App\User;
use Illuminate\Support\Facades\Auth;
class TeklifController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');

}


    public function ekle(Request $request)
    {




        $mesaj = new Teklif();
        $this->validate($request, [
            'ilanid' => 'required',
            'miktar' => 'required',



        ]);
        $ilantipknt=Ilan::whereid($request->ilanid)->firstOrFail();
        $ilantip=$ilantipknt->tip;
        $nakci=Nakliyeci::where('uyeid',Auth::id())->firstOrFail();
        $naktip=$nakci->tip;
if($ilantip==$naktip) {
    $mesaj->ilanid = $request->ilanid;
    $mesaj->nakliyeciid = Auth::id();
    $mesaj->miktar = $request->miktar;
    $uygun = 999999;
    $teklif = Teklif::where('ilanid', $request->ilanid)->get();
    if ($teklif == '[]') {
        $mesaj->save();
        return redirect('/tekliflerim');
    } else {
        $kontrol=1;
        foreach ($teklif as $t) {

            if ($t->miktar < $uygun)
                $uygun = $t->miktar;
if($t->nakliyeciid==Auth::id())
    $kontrol=0;

        }
        if($kontrol==1) {
            if ($request->miktar <= $uygun - 20 && $request->miktar >= 50) {
                $mesaj->save();
                return redirect('/tekliflerim');
            } else {
                $limit = $uygun - 20;
                $uyari = "Girebileceğiniz en düşük miktar:50 TL, en yüksek miktar:$limit TL ";
                return with($uyari);
            }
        }
        else
            return with('Zaten teklif yapmışsınız.');
    }

    //getting timestamp


    $mesaj->save();
    return view('anasayfa');
}
else
    return wiew('errors.503');


    }
    public function ilanlarim()
    {$s=0;

        $uygun=9999;
        $ilanlar=Ilan::where('uyeid',Auth::id())->get();
     foreach($ilanlar as $i){
         $teklif=Teklif::where('ilanid',$i->id)->get();

         if($teklif=='[]')
             $enuygun[$s]="henüz bir teklif yok";
         else {
             foreach ($teklif as $t) {

                 if ($t->miktar < $uygun)
                     $uygun = $t->miktar;


             }
             $enuygun[$s] = $uygun;
         }
         $yuk[$s] =City::whereid($i['yukleme'])->firstOrFail() ;
         $ind[$s] =City::whereid($i['indirme'])->firstOrFail() ;
         $indirme[$s]=$ind[$s]->il;
         $yukleme[$s]=$yuk[$s]->il;
$s=$s+1;
     }


        return view('ilanlarim',compact('ilanlar','yukleme','indirme','enuygun'));
    }

    public function tamamla(Request $request)
    {

$id=$request->ilanid;
        $ilan=Ilan::whereid($id)->firstOrFail();
        $teklif=Teklif::where('ilanid',$id)->get();
        $uygun=999999;
        $kazanan=0;
        for ($i=0;$i<count($teklif);$i++) {

            if ($teklif[$i]->miktar < $uygun)
                $kazanan=$i;

        }

        if($ilan->uyeid==Auth::id()) {
            $mesaj = new Tamamlanan();

            $mesaj->ilanid = $ilan->id;
            $mesaj->yukleme = $ilan->yukleme;
            $mesaj->indirme = $ilan->indirme;
            $mesaj->zaman = $ilan->zaman;
            $mesaj->tip = $ilan->tip;
            $mesaj->hacim = $ilan->hacim;
            $mesaj->agirlik = $ilan->agirlik;
            $mesaj->aciklama = $ilan->aciklama;
            $mesaj->uyeid = Auth::id();
            $mesaj->miktar = $teklif[$kazanan]->miktar;
            $mesaj->nakliyeciid = $teklif[$kazanan]->nakliyeciid;


            //getting timestamp

            $mesaj->save();
            Ilan::whereid($id)->delete();
            return redirect('/tamamlananlar');
        }
            else
                return view('errors.503');

    }

    public function tamamlanangoster()
    {
        $i=0;
$tamamlananlar=Tamamlanan::where('uyeid',Auth::id())->get();
        foreach($tamamlananlar as $t) {
            $yuk=City::whereid($t->yukleme)->firstOrFail();
            $yukleme[$i]=$yuk->il;
            $ind=City::whereid($t->indirme)->firstOrFail();
            $indirme[$i]=$ind->il;
        $nakliyeciad = User::whereid($t->nakliyeciid)->firstOrFail();
            $nakliyeciadi[$i]=$nakliyeciad->name;
        $nakliyecitel = User::whereid($t->nakliyeciid)->firstOrFail();
            $nakliyecitelefon[$i++]=$nakliyecitel->telno;
}
return view('tamamlananlar',compact('tamamlananlar','nakliyeciadi','nakliyecitelefon','indirme','yukleme'));
    }

    public function teklifguncelle(Request $request)
    {

        $this->validate($request, [
            'ilanid' => 'required',
            'miktar' => 'required',


        ]);

        $kontrol=0;
        $uygun = 999999;
        $teklif = Teklif::where('ilanid', $request->ilanid)->get();

        foreach ($teklif as $t) {

            if ($t->miktar < $uygun)
                $uygun = $t->miktar;
if($t->nakliyeciid==Auth::id())
    $kontrol=1;


        }
        $bu=Teklif::where([['ilanid', $request->ilanid],['miktar',$uygun]])->firstOrFail();
        if($bu->nakliyeciid!=Auth::id() && $kontrol==1) {
            if ($request->miktar <= $uygun - 20 && $request->miktar >= 50) {
                Teklif::where([['ilanid', $request->ilanid], ['nakliyeciid', Auth::id()]])->update(['miktar' => $request->miktar]);
                return redirect('/tekliflerim');
            } else {
                $limit = $uygun - 20;
                $uyari = "Girebileceğiniz en düşük miktar:50 TL, en yüksek miktar:$limit TL ";
                return with($uyari);
            }

        }
        else
            return view('errors.503');
        //getting timestamp



    }

    public function tamamlanantasimagoster()
    {
        $i=0;
        $tamamlananlar=Tamamlanan::where('nakliyeciid',Auth::id())->get();
        foreach($tamamlananlar as $t) {
            $yuk=City::whereid($t->yukleme)->firstOrFail();
            $yukleme[$i]=$yuk->il;
            $ind=City::whereid($t->indirme)->firstOrFail();
            $indirme[$i]=$ind->il;
            $uye = User::whereid($t->uyeid)->firstOrFail();
            $uyeadi[$i]=$uye->name;
            $uyetelefon[$i++]=$uye->telno;
        }
        return view('tamamlanmistasima',compact('tamamlananlar','uyeadi','uyetelefon','yukleme','indirme'));
    }



    }