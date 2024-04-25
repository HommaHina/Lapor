<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lapor extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_lapor';

    protected $fillable = ['judul_laporan','isi_laporan','klasifikasi',
    'kategori','disposisi','tanggal_masuk','tanggal_disposisi','tanggal_tindak_lanjut'
    ,'tanggal_tindak_lanjut','tanggal_batas','berkas'];

    public function sopd(){
        return $this->belongsTo(Sopd::class,'disposisi','id_sopd');
    }
}
