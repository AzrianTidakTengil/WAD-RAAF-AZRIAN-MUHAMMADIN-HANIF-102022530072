<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enums\StatusPelatih;

class Pelatih extends Model
{
    use HasFactory;

    protected $table = 'pelatih';

    protected $primaryKey = 'id';

    public $timestamps = false; 

    protected $fillable = [
        'nama_pelatih',
        'lisensi',
        'jenis_lisensi',
        'cabang_olahraga',
        'status',
    ];

    protected $attributes = [
        'status' => 'Tersedia',
    ];

    protected $casts = [
        'status' => StatusPelatih::class,
    ];
}