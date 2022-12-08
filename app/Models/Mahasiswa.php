<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table = 'tb_mahasiswa';
    protected $primaryKey = 'NIM';
    protected $fillable = ['NIM', 'nama_lengkap', 'kota_asal', 'tanggal_lahir', 'nama_ortu', 'alamat_ortu', 'kode_pos', 'no_telp', 'status_mhs'];
    const UPDATED_AT = null;
    const CREATED_AT = null;
}
