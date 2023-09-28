<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    
    protected $guarded=[];

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }

    public function golongan()
    {
        return $this->belongsTo(Golongan::class, 'golongan_id');
    }

    public function cuti()
    {
        return $this->hasMany(Cuti::class); // Asumsi kolom foreign key di tabel cuti adalah pegawai_id
    }

    public function gaji()
    {
        return $this->hasMany(Gaji::class, 'nip_pegawai'); // Asumsi kolom foreign key di tabel cuti adalah pegawai_id
    }

    public function presensi()
    {
        return $this->hasMany(Presensi::class, 'nip_pegawai'); // Asumsi kolom foreign key di tabel cuti adalah pegawai_id
    }    


}
