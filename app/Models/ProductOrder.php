<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

#[Fillable(['name', 'price'])]
class ProductOrder extends Model
{
    public function order(): MorphOne
    {
        return $this->morphOne(Order::class, 'orderable');
    }
}
