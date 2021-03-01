<?php

namespace packages\Domain\Domain\Product;

class Product
{
    private $id;
    private $name;
    private $type;
    private $made_in;
    private $stock;

    public function __construct(
        int  $id,
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

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setType(string $type)
    {
        $this->type = $type;
    }

    public function setMadeIn(string $made_in)
    {
        $this->made_in = $made_in;
    }

    public function setStock(int $stock)
    {
        $this->stock = $stock;
    }
}
