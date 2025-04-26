<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seo extends Model
{
    protected $fillable = [
        'title',
        'description',
        'keywords',
        'author',
        'favicon',
        'logo',
        'og_image',
        'og_title',
        'og_description',
        'og_url',
        'og_type',
    ];
}
