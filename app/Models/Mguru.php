<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mguru extends Model
{
    use HasFactory;
    protected $table = 'guru';
    protected $fillable = ['nip', 'nama_guru', 'alamat', 'status_guru'];
}
