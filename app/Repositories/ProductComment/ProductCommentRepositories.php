<?php

namespace App\Repositories\ProductComment;

use App\Models\ProductComment;
use App\Repositories\BaseRepositories;
use App\Repositories\RepositoriesInterface;

class ProductCommentRepositories extends BaseRepositories implements ProductCommentRepositoriesInterface
{
    public function getModel()
    {
        return ProductComment::class;
    }
}
