<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = [
        'email',
        'linkemail',
        'telepon',
        'whatsapp',
        'linkwhatsapp',
        'alamat',
        'maps_embed',
        'facebook',
        'instagram',
        'tiktok',
        'linkedin',
    ];
}
