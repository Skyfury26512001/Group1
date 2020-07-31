<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function groups()
    {
        return $this->belongsToMany(Group::class, 'product_group', 'product_id', 'group_id');
    }

    public function origin()
    {
        return $this->belongsTo(Origin::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function getValueNameAttribute()
    {
//        $formatPrice = Money::VND($this->price)->format();
//        return $formatPrice;
        $formatPrice = number_format($this->price, '0', '3', '.') . ' ₫';
        return $formatPrice;
    }
}
