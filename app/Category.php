<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use Support\MapRequest;
    protected $fillable = ['*'];

    public function products() {
        return $this->hasMany(Product::class, 'category_id', 'id');
    }
}
