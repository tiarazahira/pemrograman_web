<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'price',
        'client_id',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
