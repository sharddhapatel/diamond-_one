<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Packet extends Model
{
    use HasFactory;
    public $table = 'packets';
    protected $fillable = [
        'batch','pcs','shape','height','length','width','weight'
    ];
}
