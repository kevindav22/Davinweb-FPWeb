<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unggul extends Model
{
    use HasFactory;
    protected $fillable=[
        'title','description','image'
    ];
}
