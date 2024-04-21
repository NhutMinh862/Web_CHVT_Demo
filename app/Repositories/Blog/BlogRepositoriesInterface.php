<?php

namespace App\Repositories\Blog;

use App\Repositories\RepositoriesInterface;

interface BlogRepositoriesInterface extends RepositoriesInterface
{
    public function getLatestBlogs($limit = 3);
}
