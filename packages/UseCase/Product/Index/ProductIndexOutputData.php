<?php

namespace packages\UseCase\Product\Index;

use packages\UseCase\Product\Commons\ProductModel;

class ProductIndexOutputData
{
    public $products;

    public function __construct(array $products)
    {
        $this->products = $products;
    }
}
