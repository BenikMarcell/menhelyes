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

    public function menhely()
    {
        return $this->belongsTo(Menhely::class);
    }

    public function allat_szin()
    {
        return $this->belongsTo(Szin::class);

    }
    
    public function allat_faj()
    {
        return $this->belongsTo(Faj::class);

    }

    public function allat_kep()
    {
        return $this->hasMany(Kep::class);

    }

    public function kep()
{
    return $this->hasOne(Kep::class, 'a_id', 'a_id');
}
}
