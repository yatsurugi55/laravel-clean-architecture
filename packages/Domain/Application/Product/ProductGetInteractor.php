<?php

namespace packages\Domain\Application\Product;

use packages\Domain\Domain\Product\Product;
use packages\Domain\Domain\Product\ProductRepositoryInterface;
use packages\UseCase\Product\Get\ProductGetUseCaseInterface;
use packages\UseCase\Product\Get\ProductGetOutputData;

class ProductGetInteractor implements ProductGetUseCaseInterface
{
    private $repository;

    public function __construct(ProductRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function handle(int $id)
    {
        $product = $this->repository->findById($id);

        return new ProductGetOutputData(
            $product->getId(),
            $product->getName(),
            $product->getType(),
            $product->getMadeIn(),
            $product->getStock()
        );
    }
}
