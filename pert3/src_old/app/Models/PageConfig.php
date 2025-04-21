<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    protected $connection = 'mysql';
    protected $table = 'footers';
    protected $fillable = [
        'footer'
    ];
}
