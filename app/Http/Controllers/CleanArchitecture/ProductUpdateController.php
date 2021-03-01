<?php

namespace App\Http\Controllers\CleanArchitecture;

use Illuminate\Http\Request;
use packages\UseCase\Product\Update\ProductUpdateInputData;
use packages\UseCase\Product\Update\ProductUpdateUseCaseInterface;

class ProductUpdateController extends \App\Http\Controllers\Controller
{
    public function __invoke(ProductUpdateUseCaseInterface $interactor, Request $request)
    {
        $inputData = new ProductUpdateInputData(
            $request->id,
            $request->name,
            $request->type,
            $request->made_in,
            $request->stock
        );

        $interactor->handle($inputData);

        return redirect('/product_ca');
    }
}
