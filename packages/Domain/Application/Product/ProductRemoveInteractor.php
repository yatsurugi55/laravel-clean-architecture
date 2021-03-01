<?php

namespace packages\Domain\Application\Product;

use packages\Domain\Domain\Product\Product;
use packages\Domain\Domain\Product\ProductRepositoryInterface;
use packages\UseCase\Product\Remove\ProductRemoveInputData;
use packages\UseCase\Product\Remove\ProductRemoveUseCaseInterface;

class ProductRemoveInteractor implements ProductRemoveUseCaseInterface
{
    private $repository;

    public function __construct(ProductRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function handle(ProductRemoveInputData $inputData)
    {
        $this->repository->remove($inputData->getId());

        return;
    }
}
