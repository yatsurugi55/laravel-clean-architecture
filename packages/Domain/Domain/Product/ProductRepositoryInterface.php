<?php

namespace packages\Domain\Domain\Product;

interface ProductRepositoryInterface
{
    public function index(): array;

    public function findById(int $id): Product;

    public function update(Product $product);

    public function store(Product $product);

    public function remove(int $id);

    public function createId(): int;
}

