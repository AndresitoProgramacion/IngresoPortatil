<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portatil extends Model
{
    protected $guarded = [];
    use HasFactory;
    protected $primaryKey = 'idPor';
    protected $table = 'portatiles';
}
