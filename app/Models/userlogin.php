<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userlogin extends Model
{
    use HasFactory;
    public $table = 'login';
    protected $fillable = [
        'name','email','password'
    ];
}
