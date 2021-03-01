<?php

namespace packages\UseCase\Product\Remove;

interface ProductRemoveUseCaseInterface
{
    public function handle(ProductRemoveInputData $inputData);
}
