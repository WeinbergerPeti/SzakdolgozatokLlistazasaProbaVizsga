<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Szakdoga extends Model
{
    protected $table = 'szakdoga';

    protected $fillable = [
        "szakdoga_nev",
        "githublink",
        "oldalink",
        "tagokneve"
    ];
    
}
