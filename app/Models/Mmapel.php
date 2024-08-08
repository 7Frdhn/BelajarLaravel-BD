<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mmapel extends Model
{
    use HasFactory;
    protected $table = 'mapel';
    protected $fillable = ['kode_mapel', 'nama_mapel', 'singkatan', 'kelas', 'pengajar', 'prodi'];
}
