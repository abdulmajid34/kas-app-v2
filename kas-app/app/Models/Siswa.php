<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $table = 'siswa';
    protected $fillable = [
        'user_id',
        'kelas_id',
        'nama_lengkap',
        'email',
        'nim',
        'tanggal_lahir',
        'jenis_kelamin',
        'status',
        'alamat',
        'agama',
        'no_watshapp',
        'tentang_saya'
    ];
    protected $dates = ['tanggal_lahir'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }

    public function todos()
    {
        return $this->hasMany(Todos::class);
    }
}
