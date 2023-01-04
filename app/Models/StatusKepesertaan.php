<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusKepesertaan extends Model
{
    use HasFactory;

    protected $table = 'status_kepesertaan';
    protected $primaryKey = 'id';
}
