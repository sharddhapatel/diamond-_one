<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class webimage extends Model
{
    use HasFactory;
    public $table = 'webimages';
    protected $fillable = [
        'image'
    ];
}
