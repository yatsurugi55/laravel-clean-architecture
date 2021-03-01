<?php

namespace App\Http\Controllers\CleanArchitecture;

use Illuminate\Http\Request;
use App\Http\Models\Product\Commons\ProductViewModel;
use App\Http\Models\Product\Index\ProductIndexViewModel;
use packages\UseCase\Product\Index\ProductIndexUseCaseInterface;
use packages\UseCase\Product\Index\ProductIndexOutputData;

class ProductIndexController extends \App\Http\Controllers\Controller
{
    public function __invoke(ProductIndexUseCaseInterface $interactor)
    {   
        $response = $interactor->handle();

        $products = array_map(
            function ($product) {
                return new ProductViewModel(
                    $product->id,
                    $product->name,
                    $product->type,
                    $product->made_in,
                    $product->stock);
            },
            $response->products
        );
        $viewModel = new ProductIndexViewModel($products);
       
        return view('clean_architecture/product', compact('viewModel')); 
    }
}
