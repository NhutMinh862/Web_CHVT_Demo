<?php

namespace App\Services\ProductCategory;

use App\Repositories\ProductCategory\ProductCategoryRepositoriesInterface;
use App\Services\BaseService;

class ProductCategoryService extends BaseService implements ProductCategoryServiceInterface
{
    public $repository;
    public function __construct(ProductCategoryRepositoriesInterface $productCategoryRepositories)
    {
        $this->repository = $productCategoryRepositories;
    }
}
