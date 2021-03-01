<?php

namespace App\Http\Controllers\CleanArchitecture;

use Illuminate\Http\Request;
use packages\UseCase\Product\Remove\ProductRemoveInputData;
use packages\UseCase\Product\Remove\ProductRemoveUseCaseInterface;

class ProductRemoveController extends \App\Http\Controllers\Controller
{
    public function __invoke(ProductRemoveUseCaseInterface $interactor, Request $request)
    {
        $inputData = new ProductRemoveInputData($request->id);

        $interactor->handle($inputData);

        return redirect('/product_ca');
    }
}
