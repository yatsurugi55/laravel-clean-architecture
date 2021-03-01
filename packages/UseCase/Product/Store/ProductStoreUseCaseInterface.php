<?php

namespace packages\UseCase\Product\Store;

interface ProductStoreUseCaseInterface
{
    public function handle(ProductStoreInputData $inputData);
}
