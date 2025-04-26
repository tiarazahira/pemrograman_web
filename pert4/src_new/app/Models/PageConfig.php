<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PageConfig extends Model
{
    protected $fillable = [
        'title',
        'detail',
        'image',
    ];

}
