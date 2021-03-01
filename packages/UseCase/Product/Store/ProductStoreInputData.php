<?php

namespace packages\UseCase\Product\Store;

class ProductStoreInputData
{
    private $name;
    private $type;
    private $made_in;
    private $stock;

    public function __construct(
        string $name,
        string $type,
        string $made_in,
        int $stock
    )
    {
        $this->name = $name;
        $this->type = $type;
        $this->made_in = $made_in;
        $this->stock = $stock;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getMadeIn(): string
    {
        return $this->made_in;
    }

    public function getStock(): int
    {
        return $this->stock;
    }
}
