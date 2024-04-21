<?php

namespace App\Services\Product;

use App\Services\ServiceInterface;

interface ProductServiceInterface extends ServiceInterface
{
    public function getRelatedProduct($product,$limit = 4);
    public function getFeaturedProductsByCategory();
    public function getProductOnPC($request);
    public function getProductsByCategory($categoryName, $request);

}
