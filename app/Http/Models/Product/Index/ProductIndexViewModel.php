<?php

namespace App\Http\Models\Product\Index;

use App\Http\Models\Product\Commons\ProductViewModel;

class ProductIndexViewModel
{
    public $products;

    public function __construct(array $products)
    {
        $this->products = $products;
    }
}
