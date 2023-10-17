<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barion extends Model
{
    use HasFactory;

    public $table = 'barion';
    public $primaryKey = 'bt_id';
    public $timestamps = false;

    

}
