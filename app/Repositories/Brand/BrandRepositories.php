<?php

namespace App\Repositories\Brand;

use App\Models\Brand;
use App\Repositories\BaseRepositories;

class BrandRepositories extends BaseRepositories implements BrandRepositoriesInterface
{
    public function getModel()
    {
        return Brand::class;
    }
}
