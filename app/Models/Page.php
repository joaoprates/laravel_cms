<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Page extends Model
{
    public $timestamp = false;
    protected $fillable = ["title", "slug", "body"];

    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = Str::slug($this->attributes['title'], '-');
    }
}
