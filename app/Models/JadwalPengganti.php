<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JadwalPengganti extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'jadwal_pengganti';
    protected $primaryKey = 'id';

    protected $fillable = [
        'peserta_id', 'pembimbing_id', 'narsum_id', 'narsum_nd_id', 'hari_jam', 'fitness', 'generated_id'
    ];

    protected $with = [
        'ruangan',
        'jadwalPeserta',
        'jadwalPembimbing',
        'jadwalNarsum',
        'jadwalNarsumNd',
    ];

    public function ruangan()
    {
        return $this->hasMany(Ruangan::class, 'hari_jam', 'hari_jam');
    }

    public function jadwalPeserta()
    {
        return $this->hasOne(PersonJadwal::class, ['hari_jam', 'id'], ['hari_jam', 'person_id']);
    }

    public function jadwalPembimbing()
    {
        return $this->hasOne(PersonJadwal::class, ['hari_jam', 'id'], ['hari_jam', 'person_id']);
    }

    public function jadwalNarsum()
    {
        return $this->hasOne(PersonJadwal::class, ['hari_jam', 'id'], ['hari_jam', 'person_id']);
    }

    public function jadwalNarsumNd()
    {
        return $this->hasOne(PersonJadwal::class, ['hari_jam', 'id'], ['hari_jam', 'person_id']);
    }

    public function peserta(){
        return $this->hasOne(Person::class, 'id', 'peserta_id');
    }

    public function pembimbing(){
        return $this->hasOne(Person::class, 'id', 'pembimbing_id');
    }

    public function narsum(){
        return $this->hasOne(Person::class, 'id', 'narsum_id');
    }

    public function narsumNd(){
        return $this->hasOne(Person::class, 'id', 'narsum_nd_id');
    }



}
