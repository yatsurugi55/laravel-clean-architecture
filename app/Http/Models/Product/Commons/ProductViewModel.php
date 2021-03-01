<?php

namespace App\Http\Models\Product\Commons;

class ProductViewModel
{
    public $id;
    public $name;
    public $type;
    public $made_in;
    public $stock;

    public function __construct(
        int $id,
        string $name,
        string $type,
        string $made_in,
        int $stock)
    {
        $this->id = $id;
        $this->name = $name;
        $this->type = $type;
        $this->made_in = $made_in;
        $this->stock = $stock;
    }
}
