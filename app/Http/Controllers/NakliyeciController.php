<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nakliyeci;
use App\User;
use App\Teklif;
use App\Ilan;
use App\City;
use Illuminate\Support\Facades\Auth;
class NakliyeciController extends Controller
{
    public function ekle(Request $request)
    {
$kullanici=User::whereid(Auth::id())->firstOrFail();
        if($kullanici->vote==0) {
            $mesaj = new Nakliyeci();
            $this->validate($request, [

                'tip' => 'required',
                'plaka' => 'required',


            ]);
            if ($request->tip >= 0 && $request->tip < 3) {
                $mesaj->uyeid = Auth::id();
                $mesaj->tip = $request->tip;
                $mesaj->plaka = $request->plaka;


                //getting timestamp

                $mesaj->save();
                User::whereid(Auth::id())->update(['vote' => 1]);

                return view('anasayfa');
            } else
                return view('errors.503');
        }
        else
            return view('errors.503');
        }

        public function tekliflerim()
    {
        $teklifler=Teklif::where('nakliyeciid',Auth::id())->get();
$i=0;
        foreach($teklifler as $t){
            $ilan=Ilan::whereid($t->ilanid)->firstOrFail();
            $yuk=City::whereid($ilan->yukleme)->firstOrFail();
            $yukleme[$i]=$yuk->il;
            $ind=City::whereid($ilan->indirme)->firstOrFail();
            $indirme[$i]=$ind->il;
$ilanteklifleri=Teklif::where('ilanid',$t->ilanid)->get();
            $uygun=999999;

            foreach($ilanteklifleri as $it) {
                if ($it->miktar < $uygun) {
                    $uygun = $it->miktar;

                }
            }
$uygunteklif=Teklif::where([['ilanid',$t->ilanid],['miktar',$uygun]])->firstOrFail();
                $enuygun[$i]=$uygun;
if($uygunteklif->nakliyeciid==Auth::id())

    $bilgilendirme[$i]=' en uygun teklif zaten sizin teklifiniz';
                else
                    $bilgilendirme[$i]='Yeni bir teklif yapabilirsiniz';

            $i=$i+1;




        }

return view('tekliflerim',compact('teklifler','enuygun','bilgilendirme','yukleme','indirme'));
    }

}
