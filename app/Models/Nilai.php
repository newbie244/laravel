<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    // use HasFactory;

    protected $table = 'nilais';
    protected $primaryKey = 'id';

    protected $fillable = [
        'NamaSiswa_id','Mapel','Nilai','Predikat'
    ];

    public function Siswa()
    {
        return $this->belongsTo(Siswa::class);
    }
}
