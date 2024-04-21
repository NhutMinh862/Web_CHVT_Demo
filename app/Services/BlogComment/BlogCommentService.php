<?php

namespace App\Services\BlogComment;

use App\Repositories\BlogComment\BlogCommentRepositoriesInterface;
use App\Services\BaseService;

class BlogCommentService extends BaseService implements BlogCommentServiceInterface
{
    public $repository;
    public function __construct(BlogCommentRepositoriesInterface $blogCommentRepositories)
    {
        $this->repository = $blogCommentRepositories;
    }

}
