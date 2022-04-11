<?php

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'generic_name' => 'Fentanil',
                'form' => 'inj 0,05 mg/mL (i.m./i.v.)',
                'restriction_formula' => '5 amp/kasus',
                'description' => 'inj Hanya untuk nyeri berat dan harus diberikan oleh tim medis yang dapat melakukan resusitasi. patch Untuk nyeri kronik pada pasien kanker yang tidak terkendali dan Tidak untuk nyeri akut.',
                'faskes_tk1' => 0,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
                'category_id' => 1,
                'image'=> 'Fentanil.jpg',
            ],
            [
                'generic_name' => 'Fentanil',
                'form' => 'patch 12,5 mcg/jam',
                'restriction_formula' => '10 patch/bulan',
                'description' => 'inj Hanya untuk nyeri berat dan harus diberikan oleh tim medis yang dapat melakukan resusitasi. patch Untuk nyeri kronik pada pasien kanker yang tidak terkendali dan Tidak untuk nyeri akut.',
                'faskes_tk1' => 0,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
                'category_id' => 1,
                'image'=> 'Fentanil.jpg',
            ],
            [
                'generic_name' => 'Fentanil',
                'form' => 'patch 25 mcg/jam',
                'restriction_formula' => '10 patch/bulan',
                'description' => 'inj Hanya untuk nyeri berat dan harus diberikan oleh tim medis yang dapat melakukan resusitasi. patch Untuk nyeri kronik pada pasien kanker yang tidak terkendali dan Tidak untuk nyeri akut.',
                'faskes_tk1' => 0,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
                'category_id' => 1,
                'image'=> 'Fentanil.jpg',
            ],

            [
                'generic_name' => 'Morfin',
                'form' => 'tab 10mg',
                'restriction_formula' => 'initial dosis 3-4 tab/hari',
                'description' => 'A. Hanya untuk pemakaian pada tindakan anestesi atau perawatan di Rumah Sakit;\n
                B. Untuk mengatasi nyeri kanker yang tidak respons terhadap analgesik non narkotik;\n
                C. Untuk nyeri pada serangan jantung.',
                'faskes_tk1' => 0,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
                'category_id' => 1,
                'image'=> 'Morfin.jpg',
            ],
            [
                'generic_name' => 'Morfin',
                'form' => 'tab lepas lambat 10 mg',
                'restriction_formula' => '60 tab/bulan',
                'description' => 'A. Hanya untuk pemakaian pada tindakan anestesi atau perawatan di Rumah Sakit;\n
                B. Untuk mengatasi nyeri kanker yang tidak respons terhadap analgesik non narkotik;\n
                C. Untuk nyeri pada serangan jantung.',
                'faskes_tk1' => 0,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
                'category_id' => 1,
                'image'=> 'Morfin.jpg',
            ],
            [
                'generic_name' => 'Morfin',
                'form' => 'tab lepas lambat 15 mg',
                'restriction_formula' => '60 tab/bulan',
                'description' => 'A. Hanya untuk pemakaian pada tindakan anestesi atau perawatan di Rumah Sakit;\n
                B. Untuk mengatasi nyeri kanker yang tidak respons terhadap analgesik non narkotik;\n
                C. Untuk nyeri pada serangan jantung.',
                'faskes_tk1' => 0,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
                'category_id' => 1,
                'image'=> 'Morfin.jpg',
            ],
            [
                'generic_name' => 'Morfin',
                'form' => 'tab lepas lambat 30 mg',
                'restriction_formula' => '60 tab/bulan',
                'description' => 'A. Hanya untuk pemakaian pada tindakan anestesi atau perawatan di Rumah Sakit;\n
                B. Untuk mengatasi nyeri kanker yang tidak respons terhadap analgesik non narkotik;\n
                C. Untuk nyeri pada serangan jantung.',
                'faskes_tk1' => 0,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
                'category_id' => 1,
                'image'=> 'Morfin.jpg',
            ],
            [
                'generic_name' => 'Morfin',
                'form' => 'inj 10 mg/mL (i.m./s.k./i.v.)',
                'restriction_formula' => 'infus per 24 jam',
                'description' => 'A. Hanya untuk pemakaian pada tindakan anestesi atau perawatan di Rumah Sakit;\n
                B. Untuk mengatasi nyeri kanker yang tidak respons terhadap analgesik non narkotik;\n
                C. Untuk nyeri pada serangan jantung.',
                'faskes_tk1' => 0,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
                'category_id' => 1,
                'image'=> 'Morfin.jpg',
            ],

            [
                'generic_name' => 'Petidin',
                'form' => 'inj 50 mg/mL (i.m./i.v.)',
                'restriction_formula' => '2 amp/hari',
                'description' => 'A. Hanya untuk nyeri sedang hingga berat pada pasien yang dirawat di Rumah Sakit.\n
                B. Tidak digunakan untuk nyeri kanker',
                'faskes_tk1' => 0,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
                'category_id' => 1,
                'image'=> 'Petidin.jpg',
            ],

            [
                'generic_name' => 'Ketorolak',
                'form' => 'inj 30 mg/mL',
                'restriction_formula' => '2-3 amp/hari, maks 2 hari',
                'description' => 'Untuk nyeri sedang sampai berat pada pasien yang tidak dapat menggunakan analgesik secara oral.',
                'faskes_tk1' => 0,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
                'category_id' => 2,
                'image'=> 'Ketolorak.jpg',
            ],
            [
                'generic_name' => 'Metamizol',
                'form' => 'inj 500 mg/mL',
                'restriction_formula' => '4 amp selama dirawat.',
                'description' => 'Untuk nyeri post operatif dan hanya dalam waktu singkat.',
                'faskes_tk1' => 0,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
                'category_id' => 2,
                'image'=> 'Metamizol.jpg',
            ],
            [
                'generic_name' => 'Asam Mefenamat',
                'form' => 'kaps 250 mg',
                'restriction_formula' => '30 kaps/bulan',
                'description' => 'Salah satu obat antiinflamasi nonsteroid golongan fenamat yang digunakan dalam pengobatan nyeri ringan hingga sedang. ',
                'faskes_tk1' => 1,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
                'category_id' => 2,
                'image'=> 'asam_mefenamat.jpg',
            ],
            [
                'generic_name' => 'Asam Mefenamat',
                'form' => 'tab 500 mg',
                'restriction_formula' => '30 tab/bulan',
                'description' => 'Salah satu obat antiinflamasi nonsteroid golongan fenamat yang digunakan dalam pengobatan nyeri ringan hingga sedang. ',
                'faskes_tk1' => 1,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
                'category_id' => 2,
                'image'=> 'asam_mefenamat.jpg',
            ],

            [
                'generic_name' => 'Alopurinol',
                'form' => 'tab 100 mg*',
                'restriction_formula' => '30 tab/bulan',
                'description' => 'Tidak diberikan pada saat nyeri akut.',
                'faskes_tk1' => 1,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
                'category_id' => 3,
                'image'=> ''
            ],
            [
                'generic_name' => 'Alopurinol',
                'form' => 'tab 300 mg',
                'restriction_formula' => '30 tab/bulan',
                'description' => 'Tidak diberikan pada saat nyeri akut.',
                'faskes_tk1' => 1,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
                'category_id' => 3,
                'image'=> ''
            ],
            [
                'generic_name' => 'Kolkisin',
                'form' => 'tab 500 mcg',
                'restriction_formula' => '30 tab/bulan',
                'description' => 'Obat yang digunakan untuk meredakan gout akut',
                'faskes_tk1' => 1,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
                'category_id' => 3,
                'image'=> ''
            ],
            [
                'generic_name' => 'Probenesid',
                'form' => 'tab 500 mcg',
                'restriction_formula' => '30 tab/bulan',
                'description' => 'Obat yang meningkatkan ekskresi asam urat dalam urin. Ini terutama digunakan dalam mengobati asam urat dan hiperurisemia.',
                'faskes_tk1' => 1,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
                'category_id' => 3,
                'image'=> ''
            ],

            [
                'generic_name' => 'Amitriptilin',
                'form' => 'tab 25 mg',
                'restriction_formula' => '30 tab/bulan',
                'description' => 'Obat antidepresan yang dapat digunakan masyarakat pada umumnya untuk mengatasi depresi.',
                'faskes_tk1' => 1,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
                'category_id' => 4,
                'image'=> ''
            ],
            [
                'generic_name' => 'Gabapentin',
                'form' => 'kaps 100 mg',
                'restriction_formula' => '30 kaps/bulan',
                'description' => 'Hanya untuk neuralgia pascaherpes atau nyeri neuropati diabetikum',
                'faskes_tk1' => 0,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
                'category_id' => 4,
                'image'=> ''
            ],
            [
                'generic_name' => 'Gabapentin',
                'form' => 'kaps 300 mg',
                'restriction_formula' => '60 kaps/bulan',
                'description' => 'Hanya untuk neuralgia pascaherpes atau nyeri neuropati diabetikum',
                'faskes_tk1' => 0,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
                'category_id' => 4,
                'image'=> ''
            ],
            [
                'generic_name' => 'Karbamazepin',
                'form' => 'tab 100 mg',
                'restriction_formula' => '60 tab/bulan',
                'description' => 'Hanya untuk neuralgia trigeminal',
                'faskes_tk1' => 1,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
                'category_id' => 4,
                'image'=> ''
            ],
            [
                'generic_name' => 'Bupivakain heavy',
                'form' => 'inj 0,5% + glukosa 8%',
                'restriction_formula' => '-',
                'description' => 'Khusus untuk analgesia spinal',
                'faskes_tk1' => 0,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
                'category_id' => 5,
                'image'=> ''
            ],
            [
                'generic_name' => 'Etil Klorida',
                'form' => 'spray 100 mL',
                'restriction_formula' => '-',
                'description' => 'Obat untuk mengatasi nyeri akibat operasi, cedera olahraga, dan nyeri otot mendalam.',
                'faskes_tk1' => 1,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
                'category_id' => 5,
                'image'=> ''
            ],
            [
                'generic_name' => 'Ropivakain',
                'form' => 'inj 7,5 mg/mL',
                'restriction_formula' => 'ANALGESIK NARKOTIK',
                'description' => 'Anestesi (obat bius) yang menghambat impuls saraf yang mengirim sinyal nyeri ke otak',
                'faskes_tk1' => 0,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
                'category_id' => 5,
                'image'=> ''
            ],
            [
                'generic_name' => 'Deksmedetomidin',
                'form' => 'inj 100 mcg/mL',
                'restriction_formula' => '-',
                'description' => 'Untuk sedasi pada pasien di ICU, kraniotomi, bedah jantung dan operasi yang memerlukan waktu pembedahan yang lama.',
                'faskes_tk1' => 0,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
                'category_id' => 6,
                'image'=> ''
            ],
            [
                'generic_name' => 'Halotan',
                'form' => 'ih',
                'restriction_formula' => '-',
                'description' => 'Tidak boleh digunakan berulang dan Tidak untuk pasien dengan gangguan fungsi hati.',
                'faskes_tk1' => 0,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
                'category_id' => 6,
                'image'=> ''
            ],
            [
                'generic_name' => 'Ketamin',
                'form' => 'inj 50 mg/mL (i.v.)',
                'restriction_formula' => '-',
                'description' => 'Obat yang terutama digunakan untuk memulai dan mempertahankan anestesi',
                'faskes_tk1' => 0,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
                'category_id' => 6,
                'image'=> ''
            ],
            [
                'generic_name' => 'Ketamin',
                'form' => 'inj 100 mg/mL (i.v.)',
                'restriction_formula' => '-',
                'description' => 'Obat yang terutama digunakan untuk memulai dan mempertahankan anestesi',
                'faskes_tk1' => 0,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
                'category_id' => 6,
                'image'=> ''
            ],

            [
                'generic_name' => 'Atropin',
                'form' => 'inj 0,25 mg/mL (i.v./s.k.)',
                'restriction_formula' => '-',
                'description' => '-',
                'faskes_tk1' => 1,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
                'category_id' => 7,
                'image'=> ''
            ],
            [
                'generic_name' => 'Diazepam',
                'form' => 'inj 5 mg/mL',
                'restriction_formula' => '-',
                'description' => '-',
                'faskes_tk1' => 1,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
                'category_id' => 7,
                'image'=> ''
            ],
            [
                'generic_name' => 'Midazolam',
                'form' => 'inj 1 mg/mL (i.v.)',
                'restriction_formula' => 'Dosis rumatan 1 mg/jam (24 mg/hari) dan Dosis premedikasi: 8 vial/kasus.',
                'description' => 'Dapat digunakan untuk premedikasi sebelum induksi anestesi dan rumatan selama anestesi umum',
                'faskes_tk1' => 0,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
                'category_id' => 7,
                'image'=> ''
            ],
            [
                'generic_name' => 'Midazolam',
                'form' => 'inj 5 mg/mL (i.v.)',
                'restriction_formula' => 'Dosis rumatan 1 mg/jam (24 mg/hari) dan Dosis premedikasi: 8 vial/kasus.',
                'description' => 'Dapat digunakan untuk premedikasi sebelum induksi anestesi dan rumatan selama anestesi umum dan Dapat digunakan untuk sedasi pada pasien ICU dan HCU.',
                'faskes_tk1' => 0,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
                'category_id' => 7,
                'image'=> ''
            ],

            [
                'generic_name' => 'Deksametason',
                'form' => 'inj 5 mg/mL',
                'restriction_formula' => '20 mg/hari',
                'description' => 'Obat yang efektif untuk menangani berbagai jenis penyakit yang berkaitan dengan peradangan',
                'faskes_tk1' => 1,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
                'category_id' => 8,
                'image'=> ''
            ],
            [
                'generic_name' => 'Difenhidramin',
                'form' => 'inj 10 mg/mL (i.v./i.m.)',
                'restriction_formula' => '30 mg/hari',
                'description' => 'Obat untuk mengendalikan tanda-tanda alergi',
                'faskes_tk1' => 1,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
                'category_id' => 8,
                'image'=> ''
            ],
            [
                'generic_name' => 'Klorfeniramin',
                'form' => 'tab 4 mg',
                'restriction_formula' => '3 tab/hari, maks 5 hari',
                'description' => 'Obat golongan antihistamin yang berguna untuk mengatasi reaksi alergi',
                'faskes_tk1' => 1,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
                'category_id' => 8,
                'image'=> ''
            ],
            [
                'generic_name' => 'Efedrin',
                'form' => 'inj 50 mg/mL',
                'restriction_formula' => '-',
                'description' => 'Obat ini sering digunakan untuk mencegah tekanan darah rendah selama prosedur anestesi spinal',
                'faskes_tk1' => 0,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
                'category_id' => 9,
                'image'=> ''
            ],
            // [
            //     'generic_name' => 'Kalsium Glukonat',
            //     'form' => 'inj 10%',
            //     'restriction_formula' => '-',
            //     'description' => 'Suplemen kalsium untuk mencegah atau mengatasi rendahnya kadar kalsium dalam darah (hipokalsemia)',
            //     'faskes_tk1' => 1,
            //     'faskes_tk2' => 1,
            //     'faskes_tk3' => 1,
            //     'category_id' => 9,
            //     'image'=> ''
            // ],
            // [
            //     'generic_name' => 'Nalokson',
            //     'form' => 'inj 0,4 mg/mL',
            //     'restriction_formula' => '-',
            //     'description' => 'Hanya untuk mengatasi depresi pernapasan akibat morfin atau opioid',
            //     'faskes_tk1' => 0,
            //     'faskes_tk2' => 1,
            //     'faskes_tk3' => 1,
            //     'category_id' => 9,
            //     'image'=> ''
            // ],
            [
                'generic_name' => 'Klonazepam',
                'form' => 'tab 2 mg',
                'restriction_formula' => '30 tab/bulan',
                'description' => '-',
                'faskes_tk1' => 0,
                'faskes_tk2' => 1,
                'faskes_tk3' => 1,
                'category_id' => 10,
                'image'=> ''
            ],
            // [
            //     'generic_name' => 'Levetirasetam',
            //     'form' => 'tab 250 mg',
            //     'restriction_formula' => '60 tab/bulan',
            //     'description' => 'Sebagai terapi tambahan pada pasien epilepsi onset parsial',
            //     'faskes_tk1' => 0,
            //     'faskes_tk2' => 0,
            //     'faskes_tk3' => 1,
            //     'category_id' => 10,
            //     'image'=> ''
            // ],
            // [
            //     'generic_name' => 'Levetirasetam',
            //     'form' => 'tab 500 mg',
            //     'restriction_formula' => '90 tab/bulan',
            //     'description' => 'Sebagai terapi tambahan pada pasien epilepsi onset parsial',
            //     'faskes_tk1' => 0,
            //     'faskes_tk2' => 0,
            //     'faskes_tk3' => 1,
            //     'category_id' => 10,
            //     'image'=> ''
            // ],
            // [
            //     'generic_name' => 'Magnesium Sulfat',
            //     'form' => 'inj 20% (i.v.)',
            //     'restriction_formula' => '-',
            //     'description' => 'Hanya untuk kejang pada preeklampsia dan eklampsia. Tidak digunakan untuk kejang lainnya',
            //     'faskes_tk1' => 1,
            //     'faskes_tk2' => 1,
            //     'faskes_tk3' => 1,
            //     'category_id' => 10,
            //     'image'=> ''
            // ],
            // [
            //     'generic_name' => 'Magnesium Sulfat',
            //     'form' => 'inj 40% (i.v.)',
            //     'restriction_formula' => '-',
            //     'description' => 'Hanya untuk kejang pada preeklampsia dan eklampsia. Tidak digunakan untuk kejang lainnya',
            //     'faskes_tk1' => 1,
            //     'faskes_tk2' => 1,
            //     'faskes_tk3' => 1,
            //     'category_id' => 10,
            //     'image'=> ''
            // ],

        ]);
    }
}
