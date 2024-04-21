<?php

namespace App\Services\Brand;

use App\Repositories\Brand\BrandRepositoriesInterface;
use App\Services\BaseService;
use function Symfony\Component\Translation\t;

class BrandService extends BaseService implements BrandServiceInterface
{
    public $repository;
    public function __construct(BrandRepositoriesInterface $brandRepositories)
    {
        $this->repository = $brandRepositories;
    }

}
