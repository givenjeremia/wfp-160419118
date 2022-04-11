<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layouts.conquer2');
});
Route::view('/welcome','welcome');

Route::post('given', function () {
    return "Hallo WFP C !! Given Jeremia ";
});

Route::get('wfp/{kelas}', function($kelas){
    if($kelas == "c" || $kelas == "C"){
        return 'WFP Kelas Saya';
    }
    else{
        return 'Bukan Kelas Saya';
    }
    
});

Route::get('greeting', function(){
    return view('welcome',['name'=>'Given Jeremia']);
    
});

//Week 4
Route::resource('obat', ProductController::class);
Route::resource('kategori_obat', CategoryController::class);

//Week 6
Route::get('layout', function(){
    return view('layouts.conquer2',['page_name'=>'Reporting']);
    
});

//Week 7

Route::post('/products/showInfo','ProductController@showInfo')->name('products.showInfo');
Route::post('/category/showProducts','CategoryController@showProducts')->name('category.showProducts');


//Report
Route::get('report', function(){
    return view('report.index',['page_name'=>'Reporting']);
    
});

Route::get('/report/listproduct/{id}', 'CategoryController@showlist')->name('reportShowProduct');
//Reporting Tugas Week 5
Route::get('/report/listcategory', 'ReportController@dbqueryshowlistcategory')->name('reportShowListCategory');
// Route::get('/report/listcategory', 'ReportController@eloquentshowlistcategory')->name('reportShowListCategory');


// Route::get('/report/listproduct', 'ReportController@dbqueryshowlistproduct')->name('reportShowListProduct');
Route::get('/report/listproduct', 'ReportController@eloquentshowlistproduct')->name('reportShowListProduct');

// Route::get('/report/listproductandcategory', 'ReportController@dbquerylistproductandcategory')->name('reportShowListProductandcategory');
Route::get('/report/listproductandcategory', 'ReportController@elequentlistproductandcategory')->name('reportshowlistproductandcategory');

// Route::get('/report/countcategorywithproduct', 'ReportController@dbquerycountcategorywithproduct')->name('reportshowdbquerycountcategorywithproduct');
Route::get('/report/countcategorywithproduct', 'ReportController@eloquentcountcategorywithproduct')->name('reportshowdbquerycountcategorywithproduct');

// Route::get('/report/listcategorynoproduct', 'ReportController@dbqueryshowcategorynoproduct')->name('reportshowcategorynoproduct');
Route::get('/report/listcategorynoproduct', 'ReportController@eloquentshowcategorynoproduct')->name('reportshowcategorynoproduct');

// Route::get('/report/averagepricecategory', 'ReportController@dbqueryaveragepricecategory')->name('reportaveragepricecategory');
Route::get('/report/averagepricecategory', 'ReportController@eloquentaveragepricecategory')->name('reportaveragepricecategory');

// Route::get('/report/categoryoneproduct', 'ReportController@dbquerycategoryoneproduct')->name('reportcategoryoneproduct');
Route::get('/report/categoryoneproduct', 'ReportController@elequentcategoryoneproduct')->name('reportcategoryoneproduct');

// Route::get('/report/productoneform', 'ReportController@dbqueryproductoneform')->name('reportproductoneform');
Route::get('/report/productoneform', 'ReportController@elequentproductoneform')->name('reportproductoneform');

// Route::get('/report/highproductprice', 'ReportController@dbqueryhighproductprice')->name('reporthighproductprice');
Route::get('/report/highproductprice', 'ReportController@elequenthighproductprice')->name('reporthighproductprice');


//Exercise Week 2
Route::get('catalog', function(){
    return view('catalog',[
        'title'=>'data',
        'catalogdata'=>[
            [
                'catalog_id' => 1,
                'catalog_name'=> 'Medicines',
                'catalog_slug'=>'medicines'
            ],
            [
                'catalog_id' => 2,
                'catalog_name'=> 'Medical Quipment',
                'catalog_slug'=>'med_quip'
            ]
        ]
    ]
    ); 
});

Route::get('medicines', function(){
    return view('catalogs',[
        'title'=>'Medicines',
        'data'=>[
            [
                'id' => 1,
                'name'=> 'Acarbose',
                'desc'=>'Salah satu dari banyak golongan obat untuk pengobatan diabetes melitus (DM) tipe 2',
                'image_link'=>'img/medicines/Acarbose.jpg',
                'slug'=>'medicines'
            ],
            [
                'id' => 2,
                'name'=> 'Acrivastine',
                'desc'=>'Obat yang digunakan untuk mengatasi rhinitis akibat perubahan musim.',
                'image_link'=>'img/medicines/Acrivastine.png',
                'slug'=>'medicines'
            ],
            [
                'id' => 3,
                'name'=> 'Albendazole',
                'desc'=>'Obat yang khusus digunakan untuk mengobati penyakit ekinokokus',
                'image_link'=>'img/medicines/Albendazole.jpg',
                'slug'=>'medicines'
            ]
        ]
    ]
    ); 
});

Route::get('medicines/{id}', function($id){
    $data_medicines = [
        [
            'id' => 1,
            'name'=> 'Acarbose',
            'desc'=>'Salah satu dari banyak golongan obat untuk pengobatan diabetes melitus (DM) tipe 2 <br>
            Cara Kerja Obat : Obat acarbose bekerja dalam tubuh kita dengan cara menghambat perubahan sukrosa menjadi glukosa dan fruktosa. Dengan begitu, kadar gula dalam darah bisa lebih terkontrol. <br>
            Efek Samping : Obat acarbose sebaiknya diminum bersamaan dengan makanan, biasanya diminum bersamaan dengan suapan pertama saat makan. Meskipun aman namun obat ini sebaiknya digunakan secara hati-hati terutama jika Kamu sedang hamil dan menyusui, memiliki gangguan ginjal dan hati yang cukup parah, atau Kamu tengah demam, terluka, infeksi, atau sudah selesai operasi. Konsultasikan segera ke dokter, ya jika Kamu mengalami efek samping yang tidak biasa',
            'image_link'=>'img/medicines/Acarbose.jpg',
        ],
        [
            'id' => 2,
            'name'=> 'Acrivastine',
            'desc'=>'Obat yang digunakan untuk mengatasi rhinitis akibat perubahan musim. <br>
            Cara Kerja Obat : Acrivastine termasuk obat antihistamin dan antialergi. Obat ini bekerja dengan cara mengatasi reaksi alergi yang muncul dalam tubuh. <br>
            Efek Samping : Selain memiliki efek yang diinginkan, setiap obat pasti memiliki efek samping yang tidak diinginkan. Untuk acrivastine, efek samping yang umum terjadi adalah mengantuk, gelisah, insomnia, dan mulut kering. Konsultasikan dengan dokter kalau efek samping yang Kamu rasakan mengganggu aktivitas.',
            'image_link'=>'img/medicines/Acrivastine.png',
        ],
        [
            'id' => 3,
            'name'=> 'Albendazole',
            'desc'=>'Obat yang khusus digunakan untuk mengobati penyakit ekinokokus <br>
            Cara Kerja Obat : Albendazole efektif membunuh cacing serta menghancurkan telur dan larvanya. Kemampuan membunuh cacing dari obat ini biasanya disebut efek antelmintik. Cara kerja efek antelmintik tersebut adalah dengan menghambat pengambilan glukosa oleh cacing, sehingga parasit tersebut kekurangan energi dan lama kelamaan akan mati. <br>
            Efek Samping : Waspadai jika Kamu mengalami sejumlah gejala efek samping dari obat ini, seperti sakit kepala, peningkatan tekanan di kepala, pusing, demam, vertigo, kebotakan, nyeri perut, mual, dan muntah.
            Segera hubungi dokter kalau Kamu mengalami gejala efek samping serius, seperti: reaksi hipersensitivitas (seperti kemerahan dan urtikaria), peningkatan enzim hati, hepatitis, gagal hepar akut, sindrom Steven-Johnson, dan gagal ginjal akut.',
            'image_link'=>'img/medicines/Albendazole.jpg',
        ]
        ];
    
    $single_medicines = [];
    foreach ($data_medicines as $medicines){
        if($medicines['id']==$id){
            $single_medicines = $medicines;
        }
    }


    return view('productdetail',[
        'title'=>'Medicines',
        'data'=> $single_medicines
    ]
    ); 
});

Route::get('med_quip', function(){
    return view('catalogs',[
        'title'=>'Medical Quipment',
        'data'=>[
            [
                'id' => 1,
                'name'=> 'Alat Cek Darah',
                'desc'=>'Bagi penderita diabetes atau diabetisi alat cek darah merupakan benda yang penting',
                'image_link'=>'img/medical_quipment/alatcekdarah.jpg',
                'slug'=>'equipments'
            ],
            [
                'id' => 2,
                'name'=> 'Tensimeter',
                'desc'=>'Tekanan darah pada manusia menjadi satu ukuran yang menentukan tinggi rendahnya darah seseorang',
                'image_link'=>'img/medical_quipment/Tensimeter.jpg',
                'slug'=>'equipments'
            ]
        ]
    ]
    ); 
});

Route::get('equipments/{id}', function($id){
    $data_equipments = [
        [
            'id' => 1,
            'name'=> 'Alat Cek Darah',
            'desc'=>'Bagi penderita diabetes atau diabetisi alat cek darah merupakan benda yang penting untuk mengontrol gula darah, karena penderita diabetes memiliki kewajiban melakukan pemantauan gula darah dapat sangat terbantu dengan adanya alat ini sehingga penderita tidak perlu bolak-balik ke rumah sakit untuk cek gula darah.
            Alat cek darah ini biasanya memiliki 3 fungsi sekaligus dalam satu alat atau bisa disebut multicheck. Selain digunakan untuk mengetahui kadar gula darah juga dapat digunakan untuk mengecek asam urat dan kolesterol dalam darah',
            'image_link'=>'img/medical_quipment/alatcekdarah.jpg',
        ],
        [
            'id' => 2,
            'name'=> 'Tensimeter',
            'desc'=>'Tekanan darah pada manusia menjadi satu ukuran yang menentukan tinggi rendahnya darah seseorang, adapun beberapa faktor yang mampu mempengaruhi meningkatnya tekanan darah seperti melakukan aktivitas yang berat, mengkonsumsi kafein, pengaruh obat-obatan stres dll.
            Tensimeter berguna untuk mengukur tekanan darah, dengan mengetahui berapa tekanan darah kita dapat menilai apakah tekanan tensi darah kita normal atau tidak. Pada umumnya tekanan darah normal manusia dewasa adalah 100-130 mmHg untuk tekanan sitolik dan 60-90 mmHg untuk tekanan diastolik. Tensimeter dibagi menjadi 3 macam yaitu Tensimeter Air Raksa, Tensimeter Aneroid dan Tensimeter Digital, keduanya memiliki fungsi yang sama yaitu memonitor tekanan darah.',
            'image_link'=>'img/medical_quipment/Tensimeter.jpg',
        ]
        ];
    $single_quitment = [];
    foreach($data_equipments as $quiment){
        if($quiment['id']== $id){
            $single_quitment = $quiment;
        }
    }
    

    return view('productdetail',[
        'title'=>'Medical Quipment',
        'data'=> $single_quitment
    ]
    ); 
});



