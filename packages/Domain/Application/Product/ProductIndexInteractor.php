<?php

namespace packages\Domain\Application\Product;

use packages\Domain\Domain\Product\Product;
use packages\Domain\Domain\Product\ProductRepositoryInterface;
use packages\UseCase\Product\Commons\ProductModel;
use packages\UseCase\Product\Index\ProductIndexUseCaseInterface;
use packages\UseCase\Product\Index\ProductIndexOutputData;

class ProductIndexInteractor implements ProductIndexUseCaseInterface
{
    private $repository;

    public function __construct(ProductRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function handle()
    {
        $products = $this->repository->index();

        $productModels = array_map(
            function ($product) {
                return new ProductModel(
                    $product->getId(),
                    $product->getName(),
                    $product->getType(),
                    $product->getMadeIn(),
                    $product->getStock());
            },
            $products
        );

        return new ProductIndexOutputData($productModels);
    }
}
