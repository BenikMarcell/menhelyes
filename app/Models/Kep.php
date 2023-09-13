<?php

namespace App\Models;

use App\Models\Allat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kep extends Model
{
    use HasFactory;
    public $table = "allat_kep";
    public $primaryKey = "ak_id";
    public $timestamps = false;
    protected $guarded = [];
    public function allat_kep()
    {
        return $this->belongsTo(Allat::class);
    
    }
}
