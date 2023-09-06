<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Allat extends Model
{
    use HasFactory;
    public $table = "allat";
    public $primaryKey = "a_id";
    public $timestamps = false;
}
