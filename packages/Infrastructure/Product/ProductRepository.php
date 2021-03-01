<?php

namespace packages\Infrastructure\Product;

use DB;
use packages\Domain\Domain\Product\Product;
use packages\Domain\Domain\Product\ProductRepositoryInterface;

class ProductRepository implements ProductRepositoryInterface
{
    public function index(): array
    {
        $results = DB::table('products')->get()->toArray();

        $products = array_map(
            function ($product) {
                return new Product(
                    $product->id,
                    $product->name,
                    $product->type,
                    $product->made_in,
                    $product->stock
                );
            },
            $results
        );
        return $products;
    }

    public function findById(int $id): Product
    {
        $product = DB::table('products')->find($id);

        return new Product(
            $product->id,
            $product->name,
            $product->type,
            $product->made_in,
            $product->stock
        );
    }

    public function update(Product $product)
    {
        DB::beginTransaction();

        DB::table('products')
            ->where('id', $product->getId())
            ->update([
                'name' => $product->getName(),
                'type' => $product->getType(),
                'made_in' => $product->getMadeIn(),
                'stock' => $product->getStock(),    
            ]);

        DB::commit();

        return;
    }

    public function store(Product $product)
    {
        DB::beginTransaction();

        DB::table('products')->insert([
            'id' => $product->getId(),
            'name' => $product->getName(),
            'type' => $product->getType(),
            'made_in' => $product->getMadeIn(),
            'stock' => $product->getStock(),
        ]);

        DB::commit();

        return;
    }

    public function remove(int $id)
    {
        DB::beginTransaction();

        DB::table('products')->where('id', $id)->delete();

        DB::commit();

        return;
    }

    public function createId(): int
    {
        $id = DB::table('products')->max('id');

        return $id + 1;
    }
}
