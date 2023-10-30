<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menhely extends Model
{
    use HasFactory;
    public $table = "menhely";
    public $primaryKey = "m_id";
    public $timestamps = false;

    public function allat()
    {
        return $this->hasMany(Allat::class);
    }
    public function menhely_kep()
    {
        return $this->hasMany(MenhelyKep::class);

    }

    public function kep()
{
    return $this->hasOne(MenhelyKep::class, 'm_id', 'm_id');
}
    
   
}
