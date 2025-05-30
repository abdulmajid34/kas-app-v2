<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;
    protected $table = 'kelas';
    protected $fillable = ['kode_kelas', 'no_ruangan', 'fakultas', 'program_studi', 'user_id'];

    public function siswa()
    {
        return $this->hasMany(Siswa::class);
    }
}
