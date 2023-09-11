<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kep extends Model
{
    use HasFactory;
    public $table = "allat_kep";
    public $primaryKey = "ak_id";
    public $timestamps = false;
    public function kep()
    {
        return $this->belongsTo(Allat::class);
    
    }
}
