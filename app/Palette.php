<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Palette extends Model
{
    protected $fillable = ['name'];

    public function deliveries()
    {
        return $this->belongsTo(Delivery::class, 'delivery_id', 'id');
    }

    public function products()
    {
        return $this->hasMany(Product::class, 'palette_id', 'id');
    }
}
