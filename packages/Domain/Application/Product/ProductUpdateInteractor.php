<?php

namespace packages\Domain\Application\Product;

use packages\Domain\Domain\Product\Product;
use packages\Domain\Domain\Product\ProductRepositoryInterface;
use packages\UseCase\Product\Update\ProductUpdateInputData;
use packages\UseCase\Product\Update\ProductUpdateUseCaseInterface;

class ProductUpdateInteractor implements ProductUpdateUseCaseInterface
{
    private $repository;

    public function __construct(ProductRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function handle(ProductUpdateInputData $inputData)
    {
        $product = $this->repository->findById($inputData->getId());

        $product->setName($inputData->getName()); 
        $product->setType($inputData->getType());
        $product->setMadeIn($inputData->getMadeIn());
        $product->setStock($inputData->getStock());

        $this->repository->update($product);

        return;
    }
}
