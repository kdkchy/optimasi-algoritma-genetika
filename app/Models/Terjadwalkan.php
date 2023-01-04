<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Terjadwalkan extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'terjadwalkan';
    protected $primaryKey = 'id';

    protected $fillable = [
        'status_ujian_id',
        'peserta_id',
        'pembimbing_id',
        'narsum_id',
        'narsum_nd_id',
        'hari_jam',
        'ruangan_id',
        'judul',
        'tanggal',
        'terlaksana',
        'generated_id'
    ];

}
