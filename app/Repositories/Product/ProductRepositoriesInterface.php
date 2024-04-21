<?php

namespace App\Repositories\Product;
use App\Repositories\RepositoriesInterface;
interface ProductRepositoriesInterface extends RepositoriesInterface
{
    public function getRelatedProduct($product,$limit = 4);
    public function getFeaturedProductsByCategory(int $categoryId);
    public function getProductOnPC($request);
    public function getProductsByCategory($categoryName, $request);
}
