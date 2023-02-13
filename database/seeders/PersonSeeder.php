<?php

namespace Database\Seeders;

use App\Models\Person;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $people = [
            //autores ciencia ficción -1-2
            //Hajime Isayama -> https://www.amazon.com/stores/Hajime-Isayama/author/B006X1KSKM?ref=ap_rdr&store_ref=ap_rdr&isDramIntegrated=true&shoppingPortalEnabled=true
            //Junji Ito -> https://www.amazon.com/stores/Junji-Ito/author/B003UW81VU?ref=ap_rdr&store_ref=ap_rdr&isDramIntegrated=true&shoppingPortalEnabled=true
            [
                'first_name' => 'Hajime',
                'middle_name' => '',
                'frist_surname' => 'Isayama',
                'second_surname' => '',
            ],
            [
                'first_name' => 'Junji',
                'middle_name' => '',
                'frist_surname' => 'Ito',
                'second_surname' => '',
            ],
            //autores deporte -3-4
            //Takehiko Inoue -> https://www.amazon.com/stores/author/B003UW9N0S/allbooks?ingress=0&visitId=96583ef2-42a9-4637-b80d-7a3c04a8be97&store_ref=ap_rdr&ref_=ap_rdr
            //Haruichi Furudate -> https://www.amazon.com/stores/author/B00IJ5QPYS/allbooks?ingress=0&visitId=52ae5f20-2906-4fde-9a68-e472eba727ed&store_ref=ap_rdr&ref_=ap_rdr
            [
                'first_name' => 'Takehiko',
                'middle_name' => '',
                'frist_surname' => 'Inoue',
                'second_surname' => '',
            ],
            [
                'first_name' => 'Haruichi',
                'middle_name' => '',
                'frist_surname' => 'Furudate',
                'second_surname' => '',
            ],
            //autores distopico -5-6
            //Atsushi Ohkubo -> https://www.amazon.com/stores/Atsushi-Ohkubo/author/B00OEZLV82?ref=ap_rdr&store_ref=ap_rdr&isDramIntegrated=true&shoppingPortalEnabled=true
            //Masamune Shirow -> https://www.amazon.com/stores/Masamune-Shirow/author/B000APF1YU?ref=ap_rdr&store_ref=ap_rdr&isDramIntegrated=true&shoppingPortalEnabled=true
            [
                'first_name' => 'Atsushi',
                'middle_name' => '',
                'frist_surname' => 'Ohkubo',
                'second_surname' => '',
            ],
            [
                'first_name' => 'Masamune',
                'middle_name' => '',
                'frist_surname' => 'Shirow',
                'second_surname' => '',
            ],
            //autores historia -7-8
            //Makoto Yukimura -> https://www.amazon.com/stores/Makoto-Yukimura/author/B003UWSKI4?ref=ap_rdr&store_ref=ap_rdr&isDramIntegrated=true&shoppingPortalEnabled=true
            //Natsu Hyuuga -> https://www.amazon.com/stores/Natsu-Hyuuga/author/B0858G88VB?ref=ap_rdr&store_ref=ap_rdr&isDramIntegrated=true&shoppingPortalEnabled=true
            [
                'first_name' => 'Makoto',
                'middle_name' => '',
                'frist_surname' => 'Yurimura',
                'second_surname' => '',
            ],
            [
                'first_name' => 'Natsu',
                'middle_name' => '',
                'frist_surname' => 'Hyuuga',
                'second_surname' => '',
            ],
            //autores horror -9-10
            //Kentaro Miura -> https://www.amazon.com/stores/Kentaro-Miura/author/B003UW85ZM?ref=ap_rdr&store_ref=ap_rdr&isDramIntegrated=true&shoppingPortalEnabled=true
            //Max Braillier -> https://www.amazon.com/stores/Max-Brallier/author/B002E9FMI0?ref=ap_rdr&store_ref=ap_rdr&isDramIntegrated=true&shoppingPortalEnabled=true
            [
                'first_name' => 'Kentaro',
                'middle_name' => '',
                'frist_surname' => 'Miura',
                'second_surname' => '',
            ],
            [
                'first_name' => 'Max',
                'middle_name' => '',
                'frist_surname' => 'Braillier',
                'second_surname' => '',
            ],
            //autores Josei -11-12
            //Maki Enjoji -> https://www.amazon.com/stores/Maki-Enjoji/author/B00JGBH0XY?ref=ap_rdr&store_ref=ap_rdr&isDramIntegrated=true&shoppingPortalEnabled=true
            //Izumi Miyazono -> https://www.amazon.com/stores/Izumi-Miyazono/author/B004LVHN22?ref=ap_rdr&store_ref=ap_rdr&isDramIntegrated=true&shoppingPortalEnabled=true
            [
                'first_name' => 'Maki',
                'middle_name' => '',
                'frist_surname' => 'Enjoji',
                'second_surname' => '',
            ],
            [
                'first_name' => 'Izumi',
                'middle_name' => '',
                'frist_surname' => 'Miyazono',
                'second_surname' => '',
            ],
            //autores LGBT -13-14
            //Kuro Itsuki -> https://www.amazon.com/stores/Kuro-Itsuki/author/B0BMM6ZX4S?ref=ap_rdr&store_ref=ap_rdr&isDramIntegrated=true&shoppingPortalEnabled=true
            //Shou Harusono -> https://www.amazon.com/stores/Shou-Harusono/author/B093HKXH6J?ref=ap_rdr&store_ref=ap_rdr&isDramIntegrated=true&shoppingPortalEnabled=true
            [
                'first_name' => 'Kuro',
                'middle_name' => '',
                'frist_surname' => 'Itsuki',
                'second_surname' => '',
            ],
            [
                'first_name' => 'Shou',
                'middle_name' => '',
                'frist_surname' => 'Harusono',
                'second_surname' => '',
            ],
            //autores Acción y Aventura -15-16
            //Gege Akutami -> https://www.amazon.com/stores/Gege-Akutami/author/B08Z2CBGXP?ref=ap_rdr&store_ref=ap_rdr&isDramIntegrated=true&shoppingPortalEnabled=true
            //Koyoharu Gotouge -> https://www.amazon.com/stores/Koyoharu-Gotouge/author/B077MFJVDP?ref=ap_rdr&store_ref=ap_rdr&isDramIntegrated=true&shoppingPortalEnabled=true
            [
                'first_name' => 'Gege',
                'middle_name' => '',
                'frist_surname' => 'Akutami',
                'second_surname' => '',
            ],
            [
                'first_name' => 'Koyoharu',
                'middle_name' => '',
                'frist_surname' => 'Gotouge',
                'second_surname' => '',
            ],
            //autores Romance -17-18
            //Natsuki Kizu -> https://www.amazon.com/stores/author/B07H4F4BFT/allbooks?ingress=0&visitId=20612dc8-2f59-4970-9ebd-84ff3ec92938&store_ref=ap_rdr&ref_=ap_rdr
            //Kota Nozomi -> https://www.amazon.com/stores/Koyoharu-Gotouge/author/B077MFJVDP?ref=ap_rdr&store_ref=ap_rdr&isDramIntegrated=true&shoppingPortalEnabled=true
            [
                'first_name' => 'Natsuki',
                'middle_name' => '',
                'frist_surname' => 'Kizu',
                'second_surname' => '',
            ],
            [
                'first_name' => 'Kota',
                'middle_name' => '',
                'frist_surname' => 'Nozomi',
                'second_surname' => '',
            ],
            //autores Medios -19-20
            //Masashi Kishimoto -> https://www.amazon.com/stores/Masashi-Kishimoto/author/B001JRZNEQ?ref=ap_rdr&store_ref=ap_rdr&isDramIntegrated=true&shoppingPortalEnabled=true
            //Eiichiro Oda -> https://www.amazon.com/stores/Eiichiro-Oda/author/B0034OTZEG?ref=ap_rdr&store_ref=ap_rdr&isDramIntegrated=true&shoppingPortalEnabled=true
            [
                'first_name' => 'Masashi',
                'middle_name' => '',
                'frist_surname' => 'Kishimoto',
                'second_surname' => '',
            ],
            [
                'first_name' => 'Eiichiro',
                'middle_name' => '',
                'frist_surname' => 'Oda',
                'second_surname' => '',
            ],
            //autores Misterios -21-22
            //Tatsuya Endo -> https://www.amazon.com/stores/Tatsuya-Endo/author/B004N7ACM2?ref=ap_rdr&store_ref=ap_rdr&isDramIntegrated=true&shoppingPortalEnabled=true
            //Yukinobu Tatsu -> https://www.amazon.com/stores/Yukinobu-Tatsu/author/B00IJA2K5Q?ref=ap_rdr&store_ref=ap_rdr&isDramIntegrated=true&shoppingPortalEnabled=true
            [
                'first_name' => 'Tatsuya',
                'middle_name' => '',
                'frist_surname' => 'Endo',
                'second_surname' => '',
            ],
            [
                'first_name' => 'Yukinobu',
                'middle_name' => '',
                'frist_surname' => 'Tatsu',
                'second_surname' => '',
            ],
            //autores Religión y Espiritualidad -23-24
            //Archie Strange -> https://www.amazon.com/stores/Archie-Strange/author/B0BR2MK52F?ref=ap_rdr&store_ref=ap_rdr&isDramIntegrated=true&shoppingPortalEnabled=true
            //Siku -> https://www.amazon.com/stores/Siku/author/B001JRWKAG?ref=ap_rdr&store_ref=ap_rdr&isDramIntegrated=true&shoppingPortalEnabled=true
            [
                'first_name' => 'Archie',
                'middle_name' => '',
                'frist_surname' => 'Strange',
                'second_surname' => '',
            ],
            [
                'first_name' => 'Siku',
                'middle_name' => '',
                'frist_surname' => '',
                'second_surname' => '',
            ],
            //autores Seinen -25-26
            //Tatsuki Fujimoto -> https://www.amazon.com/stores/Tatsuki-Fujimoto/author/B077MTLX2F?ref=ap_rdr&store_ref=ap_rdr&isDramIntegrated=true&shoppingPortalEnabled=true
            //Akane Tamura -> https://www.amazon.com/stores/Akane-Tamura/author/B086DWDVFY?ref=ap_rdr&store_ref=ap_rdr&isDramIntegrated=true&shoppingPortalEnabled=true
            [
                'first_name' => 'Tatsuki',
                'middle_name' => '',
                'frist_surname' => 'Fujimoto',
                'second_surname' => '',
            ],
            [
                'first_name' => 'Akane',
                'middle_name' => '',
                'frist_surname' => 'Tamura',
                'second_surname' => '',
            ],
            //autores Shojo -27-28
            //Fujita -> https://www.amazon.com/stores/Fujita/author/B004NB4VMU?ref=ap_rdr&store_ref=ap_rdr&isDramIntegrated=true&shoppingPortalEnabled=true
            //Shinichi Fukuda -> https://www.amazon.com/stores/Shinichi-Fukuda/author/B004LWAJFY?ref=ap_rdr&store_ref=ap_rdr&isDramIntegrated=true&shoppingPortalEnabled=true
            [
                'first_name' => 'Fujita',
                'middle_name' => '',
                'frist_surname' => '',
                'second_surname' => '',
            ],
            [
                'first_name' => 'Shinichi',
                'middle_name' => '',
                'frist_surname' => 'Fukuda',
                'second_surname' => '',
            ],
            //autores Shonen -29-30
            //Akira Toriyama -> https://www.amazon.com/stores/Akira-Toriyama/author/B00M7VI7HI?ref=ap_rdr&store_ref=ap_rdr&isDramIntegrated=true&shoppingPortalEnabled=true
            //Hirohiko Araki -> https://www.amazon.com/stores/Hirohiko-Araki/author/B003UWBTDC?ref=ap_rdr&store_ref=ap_rdr&isDramIntegrated=true&shoppingPortalEnabled=true
            [
                'first_name' => 'Akira',
                'middle_name' => '',
                'frist_surname' => 'Toriyama',
                'second_surname' => '',
            ],
            [
                'first_name' => 'Hirohiko',
                'middle_name' => '',
                'frist_surname' => 'Araki',
                'second_surname' => '',
            ],
            //autores Yaoi -31-32
            //ITKZ -> https://www.amazon.com/stores/ITKZ/author/B07WD7TJMK?ref=ap_rdr&store_ref=ap_rdr&isDramIntegrated=true&shoppingPortalEnabled=true
            //Reibun Ike -> https://www.amazon.com/stores/Reibun-Ike/author/B01BCN9SHO?ref=ap_rdr&store_ref=ap_rdr&isDramIntegrated=true&shoppingPortalEnabled=true
            [
                'first_name' => 'ITKZ',
                'middle_name' => '',
                'frist_surname' => '',
                'second_surname' => '',
            ],
            [
                'first_name' => 'Reibun',
                'middle_name' => '',
                'frist_surname' => 'Ike',
                'second_surname' => '',
            ],
            //autores Yuri -33-34
            //Saburouta -> https://www.amazon.com/stores/Saburouta/author/B004LW8D8E?ref=ap_rdr&store_ref=ap_rdr&isDramIntegrated=true&shoppingPortalEnabled=true
            //Murata -> https://www.amazon.com/stores/murata/author/B07N82XFC7?ref=ap_rdr&store_ref=ap_rdr&isDramIntegrated=true&shoppingPortalEnabled=true
            [
                'first_name' => 'Saburouta',
                'middle_name' => '',
                'frist_surname' => '',
                'second_surname' => '',
            ],
            [
                'first_name' => 'Murata',
                'middle_name' => '',
                'frist_surname' => '',
                'second_surname' => '',
            ],
            //Fin de autores
            [
                'first_name' => 'Demo1',
                'middle_name' => '',
                'frist_surname' => '',
                'second_surname' => '',
            ],
            [
                'first_name' => 'Demo2',
                'middle_name' => '',
                'frist_surname' => '',
                'second_surname' => '',
            ],
            [
                'first_name' => 'Demo3',
                'middle_name' => '',
                'frist_surname' => '',
                'second_surname' => '',
            ],
        ];

        foreach($people as $key => $value){
            Person::create($value);
        }
    }
}
