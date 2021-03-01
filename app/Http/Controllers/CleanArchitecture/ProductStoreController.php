<?php

namespace App\Http\Controllers\CleanArchitecture;

use Illuminate\Http\Request;
use packages\UseCase\Product\Store\ProductStoreInputData;
use packages\UseCase\Product\Store\ProductStoreUseCaseInterface;

class ProductStoreController extends \App\Http\Controllers\Controller
{
    public function __invoke(ProductStoreUseCaseInterface $interactor, Request $request)
    {
        $inputData = new ProductStoreInputData(
            $request->name,
            $request->type,
            $request->made_in,
            $request->stock
        );

        $interactor->handle($inputData);

        return redirect('/product_ca');
    }
}
