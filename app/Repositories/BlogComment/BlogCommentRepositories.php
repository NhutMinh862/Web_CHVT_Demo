<?php

namespace App\Repositories\BlogComment;

use App\Models\BlogComment;
use App\Repositories\BaseRepositories;

class BlogCommentRepositories extends BaseRepositories implements BlogCommentRepositoriesInterface
{
    public function getModel()
    {
        return BlogComment::class;
    }
}
