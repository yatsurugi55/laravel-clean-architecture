<?php

namespace packages\UseCase\Product\Update;

interface ProductUpdateUseCaseInterface
{
    public function handle(ProductUpdateInputData $inputData);
}
