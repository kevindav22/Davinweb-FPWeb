<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimon extends Model
{
    use HasFactory;
    protected $fillable=[
        'title','name','gelar','description','image'
    ];
}
