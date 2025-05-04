<?php

namespace App\Models;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Client extends Model
{
    use HasFactory;
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($client) {
            if (empty($client->api_token)) {
                $client->api_token = Str::random(10);
            }
        });
    }
    protected $table = 'clients';
    protected $fillable = [
        'name',
        'api_token',
    ];

    public function product()
    {
        return $this->hasMany(Product::class);
    }
}