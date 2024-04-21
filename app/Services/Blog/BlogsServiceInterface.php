<?php

namespace App\Services\Blog;

use App\Services\ServiceInterface;

interface BlogsServiceInterface extends ServiceInterface
{
    public function getLatestBlogs($limit = 3);
}
