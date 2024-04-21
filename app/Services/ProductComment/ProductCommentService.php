<?php

namespace App\Services\ProductComment;

use App\Repositories\Product\ProductRepositoriesInterface;
use App\Repositories\ProductComment\ProductCommentRepositoriesInterface;
use App\Services\BaseService;
use App\Services\Product\ProductServiceInterface;

class ProductCommentService extends BaseService implements ProductCommentServiceInterface
{
    public $repository;
    public function __construct(ProductCommentRepositoriesInterface $productCommentRepositories)
    {
        $this->repository = $productCommentRepositories;
    }

}
