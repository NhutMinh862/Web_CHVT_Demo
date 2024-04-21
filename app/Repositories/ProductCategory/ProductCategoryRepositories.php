<?php

namespace App\Repositories\ProductCategory;

use App\Models\ProductCategory;
use App\Repositories\BaseRepositories;

class ProductCategoryRepositories extends BaseRepositories implements ProductCategoryRepositoriesInterface
{
    public function getModel()
    {
        return ProductCategory::class;
    }
}
