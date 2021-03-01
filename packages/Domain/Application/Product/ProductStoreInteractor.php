<?php

namespace packages\Domain\Application\Product;

use packages\Domain\Domain\Product\Product;
use packages\Domain\Domain\Product\ProductRepositoryInterface;
use packages\UseCase\Product\Store\ProductStoreInputData;
use packages\UseCase\Product\Store\ProductStoreUseCaseInterface;

class ProductStoreInteractor implements ProductStoreUseCaseInterface
{
    private $repository;

    public function __construct(ProductRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function handle(ProductStoreInputData $inputData)
    {
        $id = $this->repository->createId();

        $product = new Product(
            $id,
            $inputData->getName(),
            $inputData->getType(),
            $inputData->getMadeIn(),
            $inputData->getStock(),
        );

        $this->repository->store($product);

        return;
    }
}
