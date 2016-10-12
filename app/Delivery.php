<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    public function palettes() {
        return $this->hasMany(Palette::class, 'devilvery_id', 'id');
    }
}
