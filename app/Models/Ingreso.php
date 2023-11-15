<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingreso extends Model
{
    protected $guarded = [];
    use HasFactory;
    protected $primaryKey = 'idIn';
    protected $table = 'ingresos';
}
