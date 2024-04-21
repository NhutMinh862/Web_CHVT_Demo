<?php

namespace App\Repositories\Blog;

use App\Models\Blog;
use App\Repositories\BaseRepositories;
use App\Repositories\RepositoriesInterface;

class BlogRepositories extends BaseRepositories implements BlogRepositoriesInterface
{
    public function getModel()
    {
        return Blog::class;
    }
    public function getLatestBlogs($limit = 3)
    {
        return $this->model->orderBy('id', 'desc')
            ->limit($limit)
            ->get();
    }
}
