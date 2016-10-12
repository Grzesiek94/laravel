<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['*'];

    public function palettes()
    {
        return $this->belongsTo(Palette::class, 'palette_id', 'id');
    }

    public function categories()
    {
        return $this->hasMany(Product::class, 'palette_id', 'id');
    }
}
