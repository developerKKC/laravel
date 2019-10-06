<?php

use Illuminate\Database\Seeder;
use App\City;
class SehirlerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sehirler')->delete();

        $sehirler = [
            [ 'il' => 'Adana' ],
            [ 'il' => 'Adıyaman' ],
            [ 'il' => 'Afyonkarahisar' ],
            [ 'il' => 'Ağrı' ],
            [ 'il' => 'Aksaray' ],
            [ 'il' => 'Amasya' ],
            [ 'il' => 'Ankara' ],
            [ 'il' => 'Antalya' ],
            [ 'il' => 'Ardahan' ],
            [ 'il' => 'Artvin' ],
            [ 'il' => 'Aydın' ],
            [ 'il' => 'Balıkesir' ],
            [ 'il' => 'Bartın' ],
            [ 'il' => 'Batman' ],
            [ 'il' => 'Bayburt' ],
            [ 'il' => 'Bilecik' ],
            [ 'il' => 'Bingöl' ],
            [ 'il' => 'Bitlis' ],
            [ 'il' => 'Bolu' ],
            [ 'il' => 'Burdur' ],
            [ 'il' => 'Bursa' ],
            [ 'il' => 'Çanakkale' ],
            [ 'il' => 'Çankırı' ],
            [ 'il' => 'Çorum' ],
            [ 'il' => 'Denizli' ],
            [ 'il' => 'Diyarbakır' ],
            [ 'il' => 'Düzce' ],
            [ 'il' => 'Edirne' ],
            [ 'il' => 'Elazığ' ],
            [ 'il' => 'Erzincan' ],
            [ 'il' => 'Erzurum' ],
            [ 'il' => 'Eskişehir' ],
            [ 'il' => 'Gaziantep' ],
            [ 'il' => 'Giresun' ],
            [ 'il' => 'Gümüşhane' ],
            [ 'il' => 'Hakkari' ],
            [ 'il' => 'Hatay' ],
            [ 'il' => 'Iğdır' ],
            [ 'il' => 'Isparta' ],
            [ 'il' => 'İstanbul' ],
            [ 'il' => 'İzmir' ],
            [ 'il' => 'Kahramanmaraş' ],
            [ 'il' => 'Karabük' ],
            [ 'il' => 'Karaman' ],
            [ 'il' => 'Kars' ],
            [ 'il' => 'Kastamonu' ],
            [ 'il' => 'Kayseri' ],
            [ 'il' => 'Kırıkkale' ],
            [ 'il' => 'Kırklareli' ],
            [ 'il' => 'Kırşehir' ],
            [ 'il' => 'Kilis' ],
            [ 'il' => 'Kocaeli' ],
            [ 'il' => 'Konya' ],
            [ 'il' => 'Kütahya' ],
            [ 'il' => 'Malatya' ],
            [ 'il' => 'Manisa' ],
            [ 'il' => 'Mardin' ],
            [ 'il' => 'Mersin' ],
            [ 'il' => 'Muğla' ],
            [ 'il' => 'Muş' ],
            [ 'il' => 'Nevşehir' ],
            [ 'il' => 'Niğde' ],
            [ 'il' => 'Ordu' ],
            [ 'il' => 'Osmaniye' ],
            [ 'il' => 'Rize' ],
            [ 'il' => 'Sakarya' ],
            [ 'il' => 'Samsun' ],
            [ 'il' => 'Siirt' ],
            [ 'il' => 'Sinop' ],
            [ 'il' => 'Sivas' ],
            [ 'il' => 'Şanlıurfa' ],
            [ 'il' => 'Şırnak' ],
            [ 'il' => 'Tekirdağ' ],
            [ 'il' => 'Tokat' ],
            [ 'il' => 'Trabzon' ],
            [ 'il' => 'Tunceli' ],
            [ 'il' => 'Uşak' ],
            [ 'il' => 'Van' ],
            [ 'il' => 'Yalova' ],
            [ 'il' => 'Yozgat' ],
            [ 'il' => 'Zonguldak' ]
        ];

        foreach ($sehirler as $il)
        {
            City::create(
                $il
            );
        }
    }
}
