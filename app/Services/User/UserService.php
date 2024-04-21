<?php

namespace App\Services\User;

use App\Repositories\User\UserRepositoriesInterface;
use App\Services\BaseService;
use function Symfony\Component\Translation\t;

class UserService extends BaseService implements UserServiceInterface
{
    public $repository;
    public function __construct(UserRepositoriesInterface $userRepositories)
    {
        $this->repository = $userRepositories;
    }

}
