<?php

namespace App\Services\Product;

use App\Repositories\Product\ProductRepositoriesInterface;
use App\Services\BaseService;
use function Symfony\Component\Translation\t;

class ProductService extends BaseService implements ProductServiceInterface
{
    public $repository;
    public function __construct(ProductRepositoriesInterface $productRepositories)
    {
        $this->repository = $productRepositories;
    }
    public function find(int $id)
    {
        $product =   $this->repository->find($id);
        $avgRating = 0;
        $sumRating = array_sum(array_column($product->productComments->toArray(), 'rating'));
        $countRating = count($product->productComments);
        if($countRating != 0 ){
            $avgRating = $sumRating/$countRating;
        }
        $product->avgRating = $avgRating;
        return $product;
    }
    public function getRelatedProduct($product, $limit = 4)
    {
        return $this->repository->getRelatedProduct($product,$limit);
    }
    public function getFeaturedProductsByCategory()
    {
        return [
            "hardware"=>$this->repository->getFeaturedProductsByCategory(1),
            "technology"=>$this->repository->getFeaturedProductsByCategory(3),
            ];
    }
    public function getProductOnPC($request){
        return $this->repository->getProductOnPC($request);
    }
    public function getProductsByCategory($categoryName, $request)
    {
        return $this->repository->getProductsByCategory($categoryName, $request);
    }
}
