<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faj extends Model
{
    use HasFactory;
    public $table = "allat_faj";
    protected $primaryKey = 'af_id';
    public $timestamps = false;
    public function allt_faj()
    {
          
        return $this->hasMany(Allat::class);
        
    }
    
}
