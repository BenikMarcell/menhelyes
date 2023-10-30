<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenhelyKep extends Model
{
    use HasFactory;
    public $table = "menhely_kep";
    public $primaryKey = "mk_id";
    public $timestamps = false;
    protected $guarded = [];


    public function menhely_kep()
    {
        return $this->belongsTo(Menhely::class);
    
    }
}
