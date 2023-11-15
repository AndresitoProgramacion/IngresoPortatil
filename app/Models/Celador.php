<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Celador extends Model
{
    protected $guarded = [];
    use HasFactory;
    protected $primaryKey = 'idCel';
    protected $table = 'celadores';
}
