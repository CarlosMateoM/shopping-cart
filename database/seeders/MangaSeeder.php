<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Manga;

class MangaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $mangas = [
            //https://www.amazon.com/Hajime-Isayama-ebook/dp/B09FP6VPN7?ref_=ast_sto_dp
            [
                'author_id' => 1,
                'title' => 'Attack on Titan Vol. 34',
                'publication_date' => '2021-10-19',
                'price' => 30174,
                'stock' => 10,
                'image_path' => '51cTF-CFKcL._SY346_.jpg'
            ],
            //https://www.amazon.com/Hajime-Isayama-ebook/dp/B00CCOO1HA?ref_=ast_sto_dp
            [
                'author_id' => 1,
                'title' => 'Attack on Titan Vol. 1',
                'publication_date' => '2013-07-16',
                'price' => 34357,
                'stock' => 10,
                'image_path' => '51QWSFImgvL._SY346_.jpg'
            ],

            //https://www.amazon.com/Junji-Ito-ebook/dp/B08PH67YPJ?ref_=ast_sto_dp
            [
                'author_id' => 2,
                'title' => 'Remina',
                'publication_date' => '2020-12-15',
                'price' => 56353,
                'stock' => 10,
                'image_path' => '51hdD1lnCL.jpg'
            ],
            //https://www.amazon.com/Junji-Ito-ebook/dp/B07PMLX6H9?ref_=ast_sto_dp
            [
                'author_id' => 2,
                'title' => 'Smashed',
                'publication_date' => '2019-04-16',
                'price' => 56353,
                'stock' => 10,
                'image_path' => '51P0jM5TomL._SY346_.jpg'
            ],
            //Fin Ciencia Ficcion 1

            //https://www.amazon.com/Takehiko-Inoue-ebook/dp/B0923D7B3H?ref_=ast_sto_dp
            [
                'author_id' => 3,
                'title' => 'Real, Vol. 1',
                'publication_date' => '2021-04-27',
                'price' => 89353,
                'stock' => 10,
                'image_path' => '51mBtPl5ZrL._SY346_.jpg'
            ],
            //https://www.amazon.com/Takehiko-Inoue/dp/1421520540?ref_=ast_sto_dp
            [
                'author_id' => 3,
                'title' => 'Vagabond, Vol. 1',
                'publication_date' => '2008-09-16',
                'price' => 34253,
                'stock' => 10,
                'image_path' => '41Dn6uOzXsL._SX334_BO1,204,203,200_.jpg'
            ],

            //https://www.amazon.com/Haruichi-Furudate-ebook/dp/B01JQY83JA?ref_=ast_sto_dp
            [
                'author_id' => 4,
                'title' => 'Haiku!!, Vol. 3',
                'publication_date' => '2016-09-06',
                'price' => 30503,
                'stock' => 10,
                'image_path' => '51A8IFXRSJL.jpg'
            ],
            //https://www.amazon.com/Haruichi-Furudate-ebook/dp/B099WFZVTW?ref_=ast_sto_dp
            [
                'author_id' => 4,
                'title' => 'Haiku!!, Vol. 45',
                'publication_date' => '2021-07-03',
                'price' => 30503,
                'stock' => 10,
                'image_path' => '51norhRDWYL._SY346_.jpg'
            ],
            // Fin Deportes 2

            //https://www.amazon.com/Atsushi-Ohkubo-ebook/dp/B0B586DVD7?ref_=ast_sto_dp
            [
                'author_id' => 5,
                'title' => 'Fire Force Vol. 28',
                'publication_date' => '2022-08-16',
                'price' => 37553,
                'stock' => 10,
                'image_path' => '51CePey2QqL.jpg'
            ],
            //https://www.amazon.com/Atsushi-Ohkubo-ebook/dp/B0BPP37Z64/ref=d_pd_sbs_sccl_1_9/147-7411675-3785335?pd_rd_w=2GTgV&content-id=amzn1.sym.3676f086-9496-4fd7-8490-77cf7f43f846&pf_rd_p=3676f086-9496-4fd7-8490-77cf7f43f846&pf_rd_r=ZQ21QQC2D6QSK0TWVE46&pd_rd_wg=PD6dc&pd_rd_r=4b37d774-2799-4bac-bcb3-1be56a3b7a63&pd_rd_i=B0BPP37Z64&psc=1
            [
                'author_id' => 5,
                'title' => 'Fire Force, Vol. 31',
                'publication_date' => '2021-07-03',
                'price' => 32853,
                'stock' => 10,
                'image_path' => '51MkyeOXyML.jpg'
            ],
            

            //https://www.amazon.com/Shirow-Masamune-ebook/dp/B00A7H2BQM?ref_=ast_sto_dp
            [
                'author_id' => 6,
                'title' => 'Appleseed Book 1: The Promethean Challenge',
                'publication_date' => '2014-09-10',
                'price' => 23453,
                'stock' => 10,
                'image_path' => '61wIzH6KSlL.jpg'
            ],
            //https://www.amazon.com/Shirow-Masamune-ebook/dp/B01NA69LSR?ref_=ast_sto_dp
            [
                'author_id' => 6,
                'title' => 'The Ghost in the Shell Vol. 1',
                'publication_date' => '2016-12-14',
                'price' => 56353,
                'stock' => 10,
                'image_path' => '61Lfm1YWY5L.jpg'
            ],

            //Fin Distopicos 3

            //https://www.amazon.com/Makoto-Yukimura-ebook/dp/B0BLGYPJLS?ref_=ast_sto_dp
            [
                'author_id' => 7,
                'title' => 'Viland Saga Vol. 13',
                'publication_date' => '2022-12-20',
                'price' => 46953,
                'stock' => 10,
                'image_path' => '51uZQFXMFaL.jpg'
            ],
            //https://www.amazon.com/Makoto-Yukimura-ebook/dp/B00NBZUXDK?ref_=ast_sto_dp
            [
                'author_id' => 7,
                'title' => 'Viland Saga Vol. 5',
                'publication_date' => '2014-10-07',
                'price' => 65753,
                'stock' => 10,
                'image_path' => '51f6sYBmkoL.jpg'
            ],
            //https://www.amazon.com/Natsu-Hyuuga-ebook/dp/B09DK6QVSF?ref_=ast_sto_dp
            [
                'author_id' => 8,
                'title' => 'The Apothecary Diaries 06',
                'publication_date' => '2022-09-13',
                'price' => 37553,
                'stock' => 10,
                'image_path' => '51dlUl4PLgL.jpg'
            ],
            //https://www.amazon.com/Natsu-Hyuuga-ebook/dp/B09QLFYTT8?ref_=ast_sto_dp
            [
                'author_id' => 8,
                'title' => 'the Apothecary Diaries: Valumen 5',
                'publication_date' => '2014-10-07',
                'price' => 37553,
                'stock' => 10,
                'image_path' => '51LkBDLTUJL.jpg'
            ],

            // Fin Historia 5

            //https://www.amazon.com/Kentaro-Miura-ebook/dp/B073ZHZY3Q?ref_=ast_sto_dp
            [
                'author_id' => 9,
                'title' => 'Bersek Valumen 6',
                'publication_date' => '2017-07-18',
                'price' => 23453,
                'stock' => 10,
                'image_path' => '51eNfK5M36L.jpg'
            ],
            //https://www.amazon.com/Kentaro-Miura-ebook/dp/B073ZJV2VG?ref_=ast_sto_dp
            [
                'author_id' => 9,
                'title' => 'Bersek Valumen 1',
                'publication_date' => '2017-07-18',
                'price' => 23453,
                'stock' => 10,
                'image_path' => '5197DEKOybL.jpg'
            ],

            //https://www.amazon.com/Max-Brallier-ebook/dp/B013Q6ZZMM?ref_=ast_sto_dp
            [
                'author_id' => 10,
                'title' => 'The Las Kids on Earth',
                'publication_date' => '2015-10-13',
                'price' => 37553,
                'stock' => 10,
                'image_path' => '51IC0SfDvQL.jpg'
            ],
            //https://www.amazon.com/Max-Brallier-ebook/dp/B018FM3ESO?ref_=ast_sto_dp
            [
                'author_id' => 10,
                'title' => 'The Last Kids on Earth and the Zombie Parade',
                'publication_date' => '2014-10-07',
                'price' => 37553,
                'stock' => 10,
                'image_path' => '51usMTVxh3L.jpg'
            ],

            //Fin Horror 6

            //https://www.amazon.com/Maki-Enjoji-ebook/dp/B00GS8HKGA?ref_=ast_sto_dp
            [
                'author_id' => 11,
                'title' => 'Happy Marriage?!, Vol. 3',
                'publication_date' => '2013-12-03',
                'price' => 30585,
                'stock' => 10,
                'image_path' => '5157tW6kgL.jpg'
            ],
            //https://www.amazon.com/Maki-Enjoji-ebook/dp/B00M4L7FDI?ref_=ast_sto_dp
            [
                'author_id' => 11,
                'title' => 'Happy Marriage?!, Vol. 7',
                'publication_date' => '2014-08-05',
                'price' => 30585,
                'stock' => 10,
                'image_path' => '512kakc16nL.jpg'
            ],
            //https://www.amazon.com/Izumi-Miyazono-ebook/dp/B0767XG64B?ref_=ast_sto_dp
            [
                'author_id' => 12,
                'title' => 'Everyone\'s Getting Married, Vol 7',
                'publication_date' => '2017-12-05',
                'price' => 30585,
                'stock' => 10,
                'image_path' => '51n2eGou2DL.jpg'
            ],
            //https://www.amazon.com/Izumi-Miyazono-ebook/dp/B01I43KZ1I?ref_=ast_sto_dp
            [
                'author_id' => 12,
                'title' => 'Everyone\'s Getting Married, Vol 2',
                'publication_date' => '2016-09-06',
                'price' => 30585,
                'stock' => 10,
                'image_path' => '51d9InsnccL.jpg'
            ],

            //Fin Josei 7
            
            //https://www.amazon.com/Kuro-Itsuki-ebook/dp/B0BKVNP26T?ref_=ast_sto_dp
            [
                'author_id' => 13,
                'title' => 'Asumi-chan is Intereseted in Lesbian Brothels! Vol. 1',
                'publication_date' => '2022-11-15',
                'price' => 42367,
                'stock' => 10,
                'image_path' => '51oeq75CmWL.jpg'
            ],

            //https://www.amazon.com/Shou-Harusono-ebook/dp/B08FF848QM?ref_=ast_sto_dp
            [
                'author_id' => 14,
                'title' => 'Sasaki and Miyano Vol. 1',
                'publication_date' => '2021-02-02',
                'price' => 32942,
                'stock' => 10,
                'image_path' => '51fBWV96avL.jpg'
            ],

            //https://www.amazon.com/Shou-Harusono-ebook/dp/B093TLJ1Z6?ref_=ast_sto_dp
            [
                'author_id' => 14,
                'title' => 'Sasaki and Miyano Vol. 4',
                'publication_date' => '2021-11-09',
                'price' => 32942,
                'stock' => 10,
                'image_path' => '41ey8v8lNEL.jpg'
            ],

            // Fin de LGBT 8

            //https://www.amazon.com/Gege-Akutami-ebook/dp/B09SP9RBFY?ref_=ast_sto_dp
            [
                'author_id' => 15,
                'title' => 'Jujutsu Kaisen, Vol. 18',
                'publication_date' => '2022-12-20',
                'price' => 30585,
                'stock' => 10,
                'image_path' => '51B-QlzZmfL.jpg'
            ],
            //https://www.amazon.com/Gege-Akutami-ebook/dp/B09J6NQ6VS?ref_=ast_sto_dp
            [
                'author_id' => 15,
                'title' => 'Jujutsu Kaisen, Vol. 14: The Shibuya Incident--Right And Wrong',
                'publication_date' => '2022-02-01',
                'price' => 30585,
                'stock' => 10,
                'image_path' => '51KiuPSG8ML.jpg'
            ],
            //https://www.amazon.com/Koyoharu-Hirano-Ryoji-Gotouge-ebook/dp/B08G7BGPD2?ref_=ast_sto_dp
            [
                'author_id' => 16,
                'title' => 'Demon Slayer: Kimetsu no Yaiba, Vol 16: Undying',
                'publication_date' => '2020-09-01',
                'price' => 30585,
                'stock' => 10,
                'image_path' => '61pLtbHSEfL.jpg'
            ],
            //https://www.amazon.com/Koyoharu-Hirano-Ryoji-Gotouge-ebook/dp/B08JTV5N5J?ref_=ast_sto_dp
            [
                'author_id' => 16,
                'title' => 'Demon Slayer: Kimetsu no Yaiba, Vol 17: Successors',
                'publication_date' => '2020-10-06',
                'price' => 30585,
                'stock' => 10,
                'image_path' => '51csbemoi9L.jpg'
            ],

            // Fin de Acción y Aventura 9
            
            //https://www.amazon.com/Natsuki-Kizu-ebook/dp/B0B9HV84WP?ref_=ast_sto_dp
            [
                'author_id' => 17,
                'title' => 'Given, Vol. 7',
                'publication_date' => '2023-01-10',
                'price' => 30585,
                'stock' => 10,
                'image_path' => '51l818ksn7L.jpg'
            ],
            //https://www.amazon.com/Natsuki-Kizu/dp/3770498593?ref_=ast_sto_dp
            [
                'author_id' => 17,
                'title' => 'Given 03',
                'publication_date' => '2018-09-06',
                'price' => 30585,
                'stock' => 10,
                'image_path' => '51LdGE9LL._SX343_BO1,204,203,200_.jpg'
            ],
            //https://www.amazon.com/-/es/Kota-Nozomi/dp/1638586721/ref=sr_1_1?qid=1673533508&refinements=p_27%3AKota+Nozomi&s=books&sr=1-1
            [
                'author_id' => 18,
                'title' => 'You Like Me, Not My Daughter?! Vol. 1',
                'publication_date' => '2022-11-22',
                'price' => 59333,
                'stock' => 10,
                'image_path' => '819U2cIjSTL.jpg'
            ],
            //https://www.amazon.com/-/es/Kota-Nozomi-ebook/dp/B0B431JSX5/ref=sr_1_4?qid=1673533508&refinements=p_27%3AKota+Nozomi&s=books&sr=1-4
            [
                'author_id' => 18,
                'title' => 'You Like Me, don\'t you?: So wanna go out with me?',
                'publication_date' => '2022-06-13',
                'price' => 47080,
                'stock' => 10,
                'image_path' => '51jktwMiY6L.jpg'
            ],

            // Fin de Romance 10

            //https://www.amazon.com/-/es/Masashi-Kishimoto-ebook/dp/B00F3HG7TS?ref_=ast_sto_dp
            [
                'author_id' => 19,
                'title' => 'Naruto, Vol 1: Uzumaki Naruto',
                'publication_date' => '2010-11-02',
                'price' => 30585,
                'stock' => 10,
                'image_path' => '61blYDiS4L.jpg'
            ],

            //https://www.amazon.com/Masashi-Kishimoto-ebook/dp/B00F3HG900?ref_=ast_sto_dp
            [
                'author_id' => 19,
                'title' => 'Naruto, Vol 2: The Worst Client',
                'publication_date' => '2010-11-02',
                'price' => 30585,
                'stock' => 10,
                'image_path' => '61IH90LyydL.jpg'
            ],	    

            //https://www.amazon.com/Masashi-Kishimoto-ebook/dp/B00F3HGAOU?ref_=ast_sto_dp
            [
                'author_id' => 19,
                'title' => 'Naruto, Vol 3: Dreams',
                'publication_date' => '2010-11-16',
                'price' => 30585,
                'stock' => 10,
                'image_path' => '51GuuAYeH1L.jpg'
            ],

            //https://www.amazon.com/Eiichiro-Sanji-Oda-ebook/dp/B09SP6Z6JG?ref_=ast_sto_dp
            [
                'author_id' => 20,
                'title' => 'One Piece, Vol. 101: The Stars Take The Stage',
                'publication_date' => '2022-12-06',
                'price' => 30585,
                'stock' => 10,
                'image_path' => '61hTfZGWp7L.jpg'
            ],

            //https://www.amazon.com/Eiichiro-Oda-ebook/dp/B00F3HGERS?ref_=ast_sto_dp
            [
                'author_id' => 20,
                'title' => 'One Piece, Vol2: Buggy The Clown',
                'publication_date' => '2010-11-02',
                'price' => 30585,
                'stock' => 10,
                'image_path' => '61mPXYW0vdL.jpg'
            ],

            //Fin de Medios 11

            //https://www.amazon.com/Tatsuya-Endo-ebook/dp/B09SNQD4Y4?ref_=ast_sto_dp
		    [
		        'author_id' => 21,
		        'title' => 'Spy x Family, Vol. 8',
		        'publication_date' => '2022-09-20',
		        'price' => 30585,
		        'stock' => 10,
		        'image_path' => '41XsoqiayL.jpg'
		    ],

		    //https://www.amazon.com/Tatsuya-Endo-ebook/dp/B08WRV3MMX?ref_=ast_sto_dp
		    [
		        'author_id' => 21,
		        'title' => 'Spy x Family, Vol. 4',
		        'publication_date' => '2021-03-02',
		        'price' => 30585,
		        'stock' => 10,
		        'image_path' => '41KlMbHa6RL.jpg'
		    ],

            //https://www.amazon.com/Yukinobu-Tatsu-ebook/dp/B0BGMHSL39?ref_=ast_sto_dp
		    [
		        'author_id' => 22,
		        'title' => 'Dandadan, Vol. 1',
		        'publication_date' => '2022-10-11',
		        'price' => 30585,
		        'stock' => 10,
		        'image_path' => '510yool0ZuL.jpg'
		    ],

		    //https://www.amazon.com/Yukinobu-Tatsu-ebook/dp/B0B9HV4H4X?ref_=ast_sto_dp
		    [
		        'author_id' => 22,
		        'title' => 'Dandadan, Vol. 2',
		        'publication_date' => '2023-01-10',
		        'price' => 30585,
		        'stock' => 10,
		        'image_path' => '519-mBNIgXL.jpg'
		    ],

            //Fin de Misterios 12

            //https://www.amazon.com/Archie-Strange/dp/B094VM5QLD?ref_=ast_sto_dp
		    [
		        'author_id' => 23,
		        'title' => 'Blank Comic Book for Kids with Variety of Templates: Draw Your Own Comics',
		        'publication_date' => '2021-05-13',
		        'price' => 61219,
		        'stock' => 10,
		        'image_path' => '71kURPQsv7S.jpg'
		    ],
		    
            //https://www.amazon.com/Archie-Strange/dp/B09RFWSCHY?ref_=ast_sto_dp
		    [
		        'author_id' => 23,
		        'title' => 'Blank Comic Book for Kids with Variety of Templates: 100 Different Templates in 100 Page Blank Comic Notebook',
		        'publication_date' => '2022-01-25',
		        'price' => 56506,
		        'stock' => 10,
		        'image_path' => '71TDBI0Q7fL.jpg'
		    ],
            //https://www.amazon.com/Siku/dp/0385524315?ref_=ast_sto_dp
		    [
		        'author_id' => 24,
		        'title' => 'The Manga Bible: From Genesis to Revelation',
		        'publication_date' => '2008-01-15',
		        'price' => 70644,
		        'stock' => 10,
		        'image_path' => '815UXzH3VL.jpg'
		    ],

            //Fin de Religión y Espiritualidad 14

            //https://www.amazon.com/Tatsuki-Fujimoto-ebook/dp/B09GV1JTQF?ref_=ast_sto_dp
		    [
		        'author_id' => 25,
		        'title' => 'Chainsaw Man, Vol. 7: In a Dream',
		        'publication_date' => '2020-10-05',
		        'price' => 30585,
		        'stock' => 10,
		        'image_path' => '51NyBfrkm8L.jpg'
		    ],
		    //https://www.amazon.com/Tatsuki-Fujimoto-ebook/dp/B09J6PKNHW?ref_=ast_sto_dp
		    [
		        'author_id' => 25,
		        'title' => 'Chainsaw Man, Vol. 9: Bath',
		        'publication_date' => '2002-10-23',
		        'price' => 30585,
		        'stock' => 10,
		        'image_path' => '51-NwxmgrL.jpg'
		    ],

            //https://www.amazon.com/Akane-Tamura-ebook/dp/B0BPXY4V8N?ref_=ast_sto_dp
		    [
		        'author_id' => 26,
		        'title' => 'A Side Character\'s Love Story Vol. 13',
		        'publication_date' => '2023-01-23',
		        'price' => 25354,
		        'stock' => 10,
		        'image_path' => '514R-5hF5aL.jpg'
		    ],
		    //https://www.amazon.com/Akane-Tamura-ebook/dp/B0B3ZZ3Q2H?ref_=ast_sto_dp
		    [
		        'author_id' => 26,
		        'title' => 'A Side Character\'s Love Story Vol.11',
		        'publication_date' => '2022-07-21',
		        'price' => 25354,
		        'stock' => 10,
		        'image_path' => '41NfETXWTL.jpg'
		    ],


            //Fin de Seinen 15

		    //https://www.amazon.com/Fujita/dp/8542626842?ref_=ast_sto_dp
		    [
		        'author_id' => 27,
		        'title' => 'Wotaki: O Amor É Dificil Para Otakus Vol. 6',
		        'publication_date' => '2020-01-01',
		        'price' => 194072,
		        'stock' => 10,
		        'image_path' => '51L22Ric7tL._SX339_BO1,204,203,200_.jpg'
		    ],

		    //https://www.amazon.com/Fujita-ebook/dp/B09XGMMFDH?ref_=ast_sto_dp
		    [
		        'author_id' => 27,
		        'title' => 'Wotakoi: Love is Hard For Otaku Vol. 6',
		        'publication_date' => '2022-04-24',
		        'price' => 46939,
		        'stock' => 10,
		        'image_path' => '51TbJFtoKEL.jpg'
		    ],

            //https://www.amazon.com/Shinichi-Fukuda-ebook/dp/B0BQLJRTLB?ref_=ast_sto_dp
		    [
		        'author_id' => 28,
		        'title' => 'My Dress-UP Darling 10',
		        'publication_date' => '2023-09-19',
		        'price' => 47080,
		        'stock' => 10,
		        'image_path' => '41qTnqir7OL.jpg'
		    ],
		    //https://www.amazon.com/Shinichi-Fukuda-ebook/dp/B097QQTYC3?ref_=ast_sto_dp
		    [
		        'author_id' => 28,
		        'title' => 'My Dress-Up Darling 05',
		        'publication_date' => '2022-05-10',
		        'price' => 47080,
		        'stock' => 10,
		        'image_path' => '51OecwnfAGL.jpg'
		    ],


            //Fin de Shojo 16

            
            //https://www.amazon.com/Akira-Toriyama-ebook/dp/B08G7BX643?ref_=ast_sto_dp
		    [
		        'author_id' => 29,
		        'title' => 'Dragon Ball Super, Vol. 10: Moro\'s Wish',
		        'publication_date' => '2020-09-01',
		        'price' => 30585,
		        'stock' => 10,
		        'image_path' => '51clQcGgrrL.jpg'
		    ],
		    
            //https://www.amazon.com/-/es/Akira-Toriyama-ebook/dp/B09TGG6M1C?ref_=ast_sto_dp
		    [
		        'author_id' => 29,
		        'title' => 'Dragon Ball Super, Vol. 17: God of Destructin Power',
		        'publication_date' => '2022-12-06',
		        'price' => 30585,
		        'stock' => 10,
		        'image_path' => '61wagkhNDJL.jpg'
		    ],

            //https://www.amazon.com/Hirohiko-Araki-ebook/dp/B00N56P6UU?ref_=ast_sto_dp
		    [
		        'author_id' => 30,
		        'title' => 'JoJo\'s Bizarre Adventure',
		        'publication_date' => '2014-09-02',
		        'price' => 47080,
		        'stock' => 10,
		        'image_path' => '51SLVzly2OL.jpg'
		    ],

		    //https://www.amazon.com/Hirohiko-Araki-ebook/dp/B09SP8529T?ref_=ast_sto_dp
		    [
		        'author_id' => 30,
		        'title' => 'Thus Spoke Rohan Kishibe, vol. 2',
		        'publication_date' => '2022-12-27',
		        'price' => 51793,
		        'stock' => 10,
		        'image_path' => '51R6wajz1wL.jpg'
		    ],


            //Fin de Shonen 17


            //https://www.amazon.com/ITKZ/dp/1685793312?ref_=ast_sto_dp
		    [
		        'author_id' => 31,
		        'title' => 'The Titan\'s Bride Vol. 2',
		        'publication_date' => '2023-01-03',
		        'price' => 63575,
		        'stock' => 10,
		        'image_path' => '51MQeBWTp8L._SX354_BO1,204,203,200_.jpg'
		    ],

		    //https://www.amazon.com/dp/4434285874?ref_=ast_sto_dp
		    [
		        'author_id' => 31,
		        'title' => 'Glanz BL',
		        'publication_date' => '2023-01-12',
		        'price' => 118809,
		        'stock' => 10,
		        'image_path' => '51LQTYNCNfL._SX350_BO1,204,203,200_.jpg'
		    ],

            //https://www.amazon.com/Reibun-Ike-ebook/dp/B094Q4MB57?ref_=ast_sto_dp
		    [
		        'author_id' => 32,
		        'title' => 'Dick Figth Island, Vol. 1',
		        'publication_date' => '2021-05-11',
		        'price' => 30585,
		        'stock' => 10,
		        'image_path' => '514PoU0VhFS.jpg'
		    ],

		    //https://www.amazon.com/Ike-REIBUN/dp/237506092X?ref_=ast_sto_dp
		    [
		        'author_id' => 32,
		        'title' => 'Bi no Kyoujin X Side',
		        'publication_date' => '2018-12-06',
		        'price' => 100240,
		        'stock' => 10,
		        'image_path' => '51ogloe8q7L._SX354_BO1,204,203,200_.jpg'
		    ],


            //Fin de Yaoi 18

            
            //https://www.amazon.com/Saburouta-ebook/dp/B0BKVMXNYX?ref_=ast_sto_dp
		    [
		        'author_id' => 33,
		        'title' => 'Citrus Vol. 4',
		        'publication_date' => '2022-11-10',
		        'price' => 47080,
		        'stock' => 10,
		        'image_path' => '51NMT95hA0L.jpg'
		    ],
		    //https://www.amazon.com/Saburouta-ebook/dp/B07CRT3NBN?ref_=ast_sto_dp
		    [
		        'author_id' => 33,
		        'title' => 'Citrus Vol. 5',
		        'publication_date' => '2016-09-06',
		        'price' => 47080,
		        'stock' => 10,
		        'image_path' => '514gBfpaNUL.jpg'
		    ],

            //https://www.amazon.com/murata-ebook/dp/B09Q2L3SMJ?ref_=ast_sto_dp
		    [
		        'author_id' => 34,
		        'title' => 'Catch These Hands! Vol. 2',
		        'publication_date' => '2022-06-28',
		        'price' => 32942,
		        'stock' => 10,
		        'image_path' => '51megEnnGL.jpg'
		    ],
		    //https://www.amazon.com/murata-ebook/dp/B0B194L5LD?ref_=ast_sto_dp
		    [
		        'author_id' => 34,
		        'title' => 'Catch These Hands! Vol. 3',
		        'publication_date' => '2022-11-22',
		        'price' => 32942,
		        'stock' => 10,
		        'image_path' => '517YnOb68L.jpg'
		    ],

            //Fin de Yuri 19
        ];


        foreach($mangas as $key => $value){
            Manga::create($value);
        }
    }
}
