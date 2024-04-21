<?php

namespace App\Services\Blog;

use App\Repositories\Blog\BlogRepositoriesInterface;
use App\Services\BaseService;

class BlogsService extends BaseService implements BlogsServiceInterface
{
    public $repository;
    public function __construct(BlogRepositoriesInterface $blogRepositories)
    {
        $this->repository = $blogRepositories;
    }
    public function getLatestBlogs($limit = 3)
    {
        return $this->repository->getLatestBlogs($limit);
    }

}
