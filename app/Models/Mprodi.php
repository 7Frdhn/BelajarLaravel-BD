<?php
    
    namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mprodi extends Model
{
    use HasFactory;
    protected $table = 'prodi';
    protected $fillable = ['kode_prodi', 'nama_prodi', 'ketua_prodi', 'status_prodi', 'mulai_aktif'];
}
