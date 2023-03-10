<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    // use HasFactory;

    protected $table = 'siswas';
    protected $primaryKey = 'id';

    protected $fillable = [
        'NIS','NamaSiswa','Alamat'
    ];

    public function Nilai()
    {
        return $this->hasMany(Nilai::class);
    }
}