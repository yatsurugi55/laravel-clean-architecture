<?php

namespace App\Http\Controllers\CleanArchitecture;

use Illuminate\Http\Request;
use App\Http\Models\Product\Delete\ProductDeleteViewModel;
use packages\UseCase\Product\Get\ProductGetUseCaseInterface;
use packages\UseCase\Product\Get\ProductGetOutputData;

class ProductDeleteController extends \App\Http\Controllers\Controller
{
    public function __invoke(ProductGetUseCaseInterface $interactor, Request $request)
    {
        $outputData = $interactor->handle($request->id);

        $viewModel = new ProductDeleteViewModel(
            $outputData->getId(),
            $outputData->getName(),
            $outputData->getType(),
            $outputData->getMadeIn(),
            $outputData->getStock()
        );

        return view('clean_architecture/delete', compact('viewModel'));
    }
}
