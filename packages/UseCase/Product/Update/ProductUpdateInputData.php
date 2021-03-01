<?php

namespace packages\UseCase\Product\Update;

class ProductUpdateInputData
{
    private $id;
    private $name;
    private $type;
    private $made_in;
    private $stock;

    public function __construct(
        int $id,
        string $name,
        string $type,
        string $made_in,
        int $stock
    )
    {
        $this->id = $id;
        $this->name = $name;
        $this->type = $type;
        $this->made_in = $made_in;
        $this->stock = $stock;
    }

    public function getId(): int
    {
        return $this->id;
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
