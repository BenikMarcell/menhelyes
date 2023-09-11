<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Szin extends Model
{
    use HasFactory;
    public $table = "allat_szin";
    public $primaryKey = "szin_id";
    public $timestamps = false;
    public function szin()
    {
          
        return $this->hasMany(Allat::class);
        
    }
    
}
