<?php

namespace App\Repositories\User;

use App\Models\User;
use App\Repositories\BaseRepositories;

class UserRepositories extends BaseRepositories implements UserRepositoriesInterface
{
    public function getModel()
    {
        return User::class;
    }

}
