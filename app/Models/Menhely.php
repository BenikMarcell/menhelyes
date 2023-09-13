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
    
   
}
