<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Person extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'persons';
    protected $primaryKey = 'id';

    protected $fillable = [
        'uniq_id', 'name', 'status_person_id'
    ];

    protected $with = ['statusPerson'];

    public function statusPerson()
    {
        return $this->belongsTo(StatusPerson::class, 'status_person_id', 'id');
    }

    public function jadwalPerson()
    {
        return $this->hasMany(PersonJadwal::class, 'person_id', 'id');
    }

}
