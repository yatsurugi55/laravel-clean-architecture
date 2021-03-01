<?php

namespace App\Http\Controllers\CleanArchitecture;

class ProductCreateController extends \App\Http\Controllers\Controller
{
    public function __invoke()
    {
        return view('clean_architecture/create');
    }
}
