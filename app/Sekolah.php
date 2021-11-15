<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sekolah extends Model
{
    protected $table = "sekolah";
    protected $fillable = [
        'gambar', 'nama', 'npsn', 'alamat', 'kodepos', 'desa', 'kecamatan', 'kota', 'provinsi', 'status', 'waktu', 'jenjang','fax',
        'email', 'website', 'telp','operator'
 
    ];
    protected $primaryKey = "npsn";
}
