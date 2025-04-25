<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;
    protected $table = 'kelas';
    protected $fillable = ['user_id', 'nama_task', 'deskripsi', 'status_todos', 'tgl_dibuat'];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }
}
