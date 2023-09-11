<?php

namespace App\Models;

use App\Models\Faj;
use App\Models\Szin;
use App\Models\Menhely;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Allat extends Model
{
    use HasFactory;
    public $table = "allat";
    public $primaryKey = "a_id";
    public $timestamps = false;
    public function allat()
    {
        return $this->belongsTo(Menhely::class);
    
        return $this->belongsTo(Szin::class);

        return $this->belongsTo(Faj::class);

        return $this->hasMany(Kep::class);
    }
}
