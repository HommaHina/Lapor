<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sopd extends Model
{
    use HasFactory;

    protected $table = 'sopd';
    protected $primaryKey = 'id_sopd';

    protected $fillable = ['nama_sopd','username','password',
    'level','jenis_sopd'];

    // public function lapor(){
    //     return $this->hasMany(Lapor::class);
    // }

}
