<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Sopd;

class SopdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sopd::create( [
            'id_sopd'=>1,
            'nama_sopd'=>'Sekretariat Daerah',
            'username'=>'setda@baritokualakab.go.id',
            'password'=>'fc05c5fa72a37c48539f4c71f8d906ad8b98c988',
            'level'=>'2',
            'jenis_sopd'=>3
            ] );



            Sopd::create( [
            'id_sopd'=>2,
            'nama_sopd'=>'Sekretariat DPRD',
            'username'=>'setwan@baritokualakab.go.id',
            'password'=>'fc05c5fa72a37c48539f4c71f8d906ad8b98c988',
            'level'=>'2',
            'jenis_sopd'=>3
            ] );



            Sopd::create( [
            'id_sopd'=>4,
            'nama_sopd'=>'Inspektorat',
            'username'=>'inspektorat@baritokualakab.go.id',
            'password'=>'fc05c5fa72a37c48539f4c71f8d906ad8b98c988',
            'level'=>'2',
            'jenis_sopd'=>3
            ] );



            Sopd::create( [
            'id_sopd'=>5,
            'nama_sopd'=>'Dinas Pendidikan',
            'username'=>'disdik@baritokualakab.go.id',
            'password'=>'fc05c5fa72a37c48539f4c71f8d906ad8b98c988',
            'level'=>'2',
            'jenis_sopd'=>2
            ] );



            Sopd::create( [
            'id_sopd'=>6,
            'nama_sopd'=>'Dinas Kesehatan',
            'username'=>'dinkes@baritokualakab.go.id',
            'password'=>'fc05c5fa72a37c48539f4c71f8d906ad8b98c988',
            'level'=>'2',
            'jenis_sopd'=>2
            ] );



            Sopd::create( [
            'id_sopd'=>7,
            'nama_sopd'=>'Dinas Pekerjaan Umum dan Penataan Ruang',
            'username'=>'dinpupr@baritokualakab.go.id',
            'password'=>'fc05c5fa72a37c48539f4c71f8d906ad8b98c988',
            'level'=>'2',
            'jenis_sopd'=>2
            ] );



            Sopd::create( [
            'id_sopd'=>8,
            'nama_sopd'=>'Dinas Perumahan Rakyat dan Kawasan Pemukiman',
            'username'=>'disperkim@baritokualakab.go.id',
            'password'=>'fc05c5fa72a37c48539f4c71f8d906ad8b98c988',
            'level'=>'2',
            'jenis_sopd'=>2
            ] );



            Sopd::create( [
            'id_sopd'=>9,
            'nama_sopd'=>'Satuan Polisi Pamong Praja',
            'username'=>'satpolpp@baritokualakab.go.id',
            'password'=>'fc05c5fa72a37c48539f4c71f8d906ad8b98c988',
            'level'=>'2',
            'jenis_sopd'=>3
            ] );



            Sopd::create( [
            'id_sopd'=>10,
            'nama_sopd'=>'Dinas Sosial',
            'username'=>'dinsos@baritokualakab.go.id',
            'password'=>'fc05c5fa72a37c48539f4c71f8d906ad8b98c988',
            'level'=>'2',
            'jenis_sopd'=>2
            ] );



            Sopd::create( [
            'id_sopd'=>11,
            'nama_sopd'=>'Dinas Kepemudaan Olah Raga, Budaya dan Pariwisata',
            'username'=>'disporbudpar@baritokualakab.go.id',
            'password'=>'f991d5d5aec35041549b5986fac1cbed16e218c3',
            'level'=>'2',
            'jenis_sopd'=>2
            ] );



            Sopd::create( [
            'id_sopd'=>12,
            'nama_sopd'=>'Dinas Pengendalian Penduduk, Keluarga Berencana Pe...',
            'username'=>'bppkbp3a@baritokualakab.go.id',
            'password'=>'fc05c5fa72a37c48539f4c71f8d906ad8b98c988',
            'level'=>'2',
            'jenis_sopd'=>2
            ] );



            Sopd::create( [
            'id_sopd'=>13,
            'nama_sopd'=>'Dinas Kependudukan dan Pencatatan Sipil',
            'username'=>'disdukcapil@baritokualakab.go.id',
            'password'=>'fc05c5fa72a37c48539f4c71f8d906ad8b98c988',
            'level'=>'2',
            'jenis_sopd'=>2
            ] );



            Sopd::create( [
            'id_sopd'=>14,
            'nama_sopd'=>'Dinas Pemberdayaan Masyarakat dan Desa',
            'username'=>'dpmd@baritokualakab.go.id',
            'password'=>'fc05c5fa72a37c48539f4c71f8d906ad8b98c988',
            'level'=>'2',
            'jenis_sopd'=>2
            ] );



            Sopd::create( [
            'id_sopd'=>15,
            'nama_sopd'=>'Dinas Penanaman Modal dan Pelayanan Terpadu Satu P...',
            'username'=>'dpmptsp@baritokualakab.go.id',
            'password'=>'fc05c5fa72a37c48539f4c71f8d906ad8b98c988',
            'level'=>'2',
            'jenis_sopd'=>2
            ] );



            Sopd::create( [
            'id_sopd'=>16,
            'nama_sopd'=>'Dinas Koperasi Perindustrian dan Perdagangan',
            'username'=>'diskopperindag@baritokualakab.go.id',
            'password'=>'fc05c5fa72a37c48539f4c71f8d906ad8b98c988',
            'level'=>'2',
            'jenis_sopd'=>2
            ] );



            Sopd::create( [
            'id_sopd'=>17,
            'nama_sopd'=>'Dinas Tenaga Kerja dan Transmigrasi',
            'username'=>'disnakertrans@baritokualakab.go.id',
            'password'=>'fc05c5fa72a37c48539f4c71f8d906ad8b98c988',
            'level'=>'2',
            'jenis_sopd'=>2
            ] );



            Sopd::create( [
            'id_sopd'=>18,
            'nama_sopd'=>'Dinas Komunikasi dan Informatika',
            'username'=>'diskominfo@baritokualakab.go.id',
            'password'=>'fc05c5fa72a37c48539f4c71f8d906ad8b98c988',
            'level'=>'2',
            'jenis_sopd'=>2
            ] );



            Sopd::create( [
            'id_sopd'=>19,
            'nama_sopd'=>'Dinas Perhubungan',
            'username'=>'dishub@baritokualakab.go.id',
            'password'=>'9ad184b28228eb78757578530e512d7e7d084ecc',
            'level'=>'2',
            'jenis_sopd'=>2
            ] );



            Sopd::create( [
            'id_sopd'=>20,
            'nama_sopd'=>'Dinas Lingkungan Hidup',
            'username'=>'dlh@baritokualakab.go.id',
            'password'=>'fc05c5fa72a37c48539f4c71f8d906ad8b98c988',
            'level'=>'2',
            'jenis_sopd'=>2
            ] );



            Sopd::create( [
            'id_sopd'=>21,
            'nama_sopd'=>'Dinas Pertanian Tanaman Pangan dan Hortikultura',
            'username'=>'distantph@baritokualakab.go.id',
            'password'=>'69810a53d4f31ff3881f5361ad54cd26ae8c241e',
            'level'=>'2',
            'jenis_sopd'=>2
            ] );



            Sopd::create( [
            'id_sopd'=>22,
            'nama_sopd'=>'Dinas Perkebunan dan Peternakan',
            'username'=>'disbunnak@baritokualakab.go.id',
            'password'=>'fc05c5fa72a37c48539f4c71f8d906ad8b98c988',
            'level'=>'2',
            'jenis_sopd'=>2
            ] );



            Sopd::create( [
            'id_sopd'=>23,
            'nama_sopd'=>'Dinas Ketahanan Pangan dan Perikanan',
            'username'=>'dkpp@baritokualakab.go.id',
            'password'=>'fc05c5fa72a37c48539f4c71f8d906ad8b98c988',
            'level'=>'2',
            'jenis_sopd'=>2
            ] );



            Sopd::create( [
            'id_sopd'=>24,
            'nama_sopd'=>'Dinas Perpustakaan dan Kearsipan',
            'username'=>'disperpusip@baritokualakab.go.id',
            'password'=>'fc05c5fa72a37c48539f4c71f8d906ad8b98c988',
            'level'=>'2',
            'jenis_sopd'=>2
            ] );



            Sopd::create( [
            'id_sopd'=>25,
            'nama_sopd'=>'Badan Perencananaan Pembangunan, Penelitian dan Pe...',
            'username'=>'bappelitbang@baritokualakab.go.id',
            'password'=>'fc05c5fa72a37c48539f4c71f8d906ad8b98c988',
            'level'=>'2',
            'jenis_sopd'=>1
            ] );



            Sopd::create( [
            'id_sopd'=>26,
            'nama_sopd'=>'Badan Pengelolaan Keuangan dan Aset Daerah',
            'username'=>'bpkad@baritokualakab.go.id',
            'password'=>'fc05c5fa72a37c48539f4c71f8d906ad8b98c988',
            'level'=>'2',
            'jenis_sopd'=>1
            ] );



            Sopd::create( [
            'id_sopd'=>27,
            'nama_sopd'=>'Badan Pengelolaan Pajak dan Retribusi Daerah',
            'username'=>'bp2rd@baritokualakab.go.id',
            'password'=>'fc05c5fa72a37c48539f4c71f8d906ad8b98c988',
            'level'=>'2',
            'jenis_sopd'=>1
            ] );



            Sopd::create( [
            'id_sopd'=>28,
            'nama_sopd'=>'Badan Kepegawaian Pendidikan dan Pelatihan',
            'username'=>'bapegdiklat@baritokualakab.go.id',
            'password'=>'100fc25825171dd9c70eb06797d02164528c613d',
            'level'=>'2',
            'jenis_sopd'=>1
            ] );



            Sopd::create( [
            'id_sopd'=>29,
            'nama_sopd'=>'Badan Kesatuan Bangsa dan Politik',
            'username'=>'kesbangpol@baritokualakab.go.id',
            'password'=>'fc05c5fa72a37c48539f4c71f8d906ad8b98c988',
            'level'=>'2',
            'jenis_sopd'=>1
            ] );



            Sopd::create( [
            'id_sopd'=>30,
            'nama_sopd'=>'Badan Penanggulangan Bencana Daerah',
            'username'=>'bpbd@baritokualakab.go.id',
            'password'=>'fc05c5fa72a37c48539f4c71f8d906ad8b98c988',
            'level'=>'2',
            'jenis_sopd'=>1
            ] );



            Sopd::create( [
            'id_sopd'=>31,
            'nama_sopd'=>'Rumah Sakit Umum Daerah H.Abdul Aziz',
            'username'=>'rsud.abdulaziz@baritokualakab.go.id',
            'password'=>'fc05c5fa72a37c48539f4c71f8d906ad8b98c988',
            'level'=>'2',
            'jenis_sopd'=>6
            ] );



            Sopd::create( [
            'id_sopd'=>32,
            'nama_sopd'=>'Kecamatan Marabahan',
            'username'=>'kec.marabahan@baritokualakab.go.id',
            'password'=>'fc05c5fa72a37c48539f4c71f8d906ad8b98c988',
            'level'=>'2',
            'jenis_sopd'=>4
            ] );



            Sopd::create( [
            'id_sopd'=>33,
            'nama_sopd'=>'Kecamatan Bakumpai',
            'username'=>'kec.bakumpai@baritokualakab.go.id',
            'password'=>'fc05c5fa72a37c48539f4c71f8d906ad8b98c988',
            'level'=>'2',
            'jenis_sopd'=>4
            ] );



            Sopd::create( [
            'id_sopd'=>34,
            'nama_sopd'=>'Kecamatan Tabukan',
            'username'=>'kec.tabukan@baritokualakab.go.id',
            'password'=>'fc05c5fa72a37c48539f4c71f8d906ad8b98c988',
            'level'=>'2',
            'jenis_sopd'=>4
            ] );



            Sopd::create( [
            'id_sopd'=>35,
            'nama_sopd'=>'Kecamatan Cerbon',
            'username'=>'kec.cerbon@baritokualakab.go.id',
            'password'=>'fc05c5fa72a37c48539f4c71f8d906ad8b98c988',
            'level'=>'2',
            'jenis_sopd'=>4
            ] );



            Sopd::create( [
            'id_sopd'=>36,
            'nama_sopd'=>'Kecamatan Barambai',
            'username'=>'kec.barambai@baritokualakab.go.id',
            'password'=>'fc05c5fa72a37c48539f4c71f8d906ad8b98c988',
            'level'=>'2',
            'jenis_sopd'=>4
            ] );



            Sopd::create( [
            'id_sopd'=>37,
            'nama_sopd'=>'Kecamatan Wanaraya',
            'username'=>'kec.wanaraya@baritokualakab.go.id',
            'password'=>'fc05c5fa72a37c48539f4c71f8d906ad8b98c988',
            'level'=>'2',
            'jenis_sopd'=>4
            ] );



            Sopd::create( [
            'id_sopd'=>38,
            'nama_sopd'=>'Kecamatan Belawang',
            'username'=>'kec.belawang@baritokualakab.go.id',
            'password'=>'fc05c5fa72a37c48539f4c71f8d906ad8b98c988',
            'level'=>'2',
            'jenis_sopd'=>4
            ] );



            Sopd::create( [
            'id_sopd'=>39,
            'nama_sopd'=>'Kecamatan Rantau Badauh',
            'username'=>'kec.rantaubadauh@baritokualakab.go.id',
            'password'=>'fc05c5fa72a37c48539f4c71f8d906ad8b98c988',
            'level'=>'2',
            'jenis_sopd'=>4
            ] );



            Sopd::create( [
            'id_sopd'=>40,
            'nama_sopd'=>'Kecamatan Jejangkit',
            'username'=>'kec.jejeangkit@baritokualakab.go.id',
            'password'=>'fc05c5fa72a37c48539f4c71f8d906ad8b98c988',
            'level'=>'2',
            'jenis_sopd'=>4
            ] );



            Sopd::create( [
            'id_sopd'=>41,
            'nama_sopd'=>'Kecamatan Mandastana',
            'username'=>'kec.mandastana@baritokualakab.go.id',
            'password'=>'fc05c5fa72a37c48539f4c71f8d906ad8b98c988',
            'level'=>'2',
            'jenis_sopd'=>4
            ] );



            Sopd::create( [
            'id_sopd'=>42,
            'nama_sopd'=>'Kecamatan Alalak',
            'username'=>'kec.alalak@baritokualakab.go.id',
            'password'=>'fc05c5fa72a37c48539f4c71f8d906ad8b98c988',
            'level'=>'2',
            'jenis_sopd'=>4
            ] );



            Sopd::create( [
            'id_sopd'=>43,
            'nama_sopd'=>'Kecamatan Anjir Muara',
            'username'=>'kec.anjirmuara@baritokualakab.go.id',
            'password'=>'fc05c5fa72a37c48539f4c71f8d906ad8b98c988',
            'level'=>'2',
            'jenis_sopd'=>4
            ] );



            Sopd::create( [
            'id_sopd'=>44,
            'nama_sopd'=>'Kecamatan Anjir Pasar',
            'username'=>'kec.anjirpasar@baritokualakab.go.id',
            'password'=>'fc05c5fa72a37c48539f4c71f8d906ad8b98c988',
            'level'=>'2',
            'jenis_sopd'=>4
            ] );



            Sopd::create( [
            'id_sopd'=>45,
            'nama_sopd'=>'Kecamatan Tamban',
            'username'=>'kec.tamban@baritokualakab.go.id',
            'password'=>'fc05c5fa72a37c48539f4c71f8d906ad8b98c988',
            'level'=>'2',
            'jenis_sopd'=>4
            ] );



            Sopd::create( [
            'id_sopd'=>46,
            'nama_sopd'=>'Kecamatan Mekarsari',
            'username'=>'kec.mekarsari@baritokualakab.go.id',
            'password'=>'fc05c5fa72a37c48539f4c71f8d906ad8b98c988',
            'level'=>'2',
            'jenis_sopd'=>4
            ] );



            Sopd::create( [
            'id_sopd'=>47,
            'nama_sopd'=>'Kecamatan Tabunganen',
            'username'=>'kec.tabunganen@baritokualakab.go.id',
            'password'=>'fc05c5fa72a37c48539f4c71f8d906ad8b98c988',
            'level'=>'2',
            'jenis_sopd'=>4
            ] );



            Sopd::create( [
            'id_sopd'=>48,
            'nama_sopd'=>'Kecamatan Kuripan',
            'username'=>'kec.kuripan@baritokualakab.go.id',
            'password'=>'fc05c5fa72a37c48539f4c71f8d906ad8b98c988',
            'level'=>'2',
            'jenis_sopd'=>4
            ] );



            Sopd::create( [
            'id_sopd'=>49,
            'nama_sopd'=>'PDAM',
            'username'=>'pdambatola@baritokualakab.go.id',
            'password'=>'fc05c5fa72a37c48539f4c71f8d906ad8b98c988',
            'level'=>'2',
            'jenis_sopd'=>6
            ] );



            Sopd::create( [
            'id_sopd'=>50,
            'nama_sopd'=>'Super Admin',
            'username'=>'superadmin',
            'password'=>'f7b71fb90a7128f75d25a456589b623fa3a603e1',
            'level'=>'1',
            'jenis_sopd'=>0
            ] );



            Sopd::create( [
            'id_sopd'=>51,
            'nama_sopd'=>'Bidang TIK dan SA',
            'username'=>'bidangitikdansa@baritokualakab.go.id',
            'password'=>'7e335737addcf03c514b06738cef007d8ceaf323',
            'level'=>'3',
            'jenis_sopd'=>0
            ] );



            Sopd::create( [
            'id_sopd'=>52,
            'nama_sopd'=>'Badan Pusat Statistik',
            'username'=>'bps_batola',
            'password'=>'fc05c5fa72a37c48539f4c71f8d906ad8b98c988',
            'level'=>'2',
            'jenis_sopd'=>1
            ] );

    }
}
