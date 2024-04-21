<?php

namespace App\Services\OrderDetail;

use App\Repositories\OrderDetail\OrderDetailRepositoriesInterface;
use App\Services\BaseService;

class OrderDetailService extends BaseService implements OrderDetailServiceInterface
{
    public $repository;
    public function __construct(OrderDetailRepositoriesInterface $orderDetailRepositories)
    {
        $this->repository = $orderDetailRepositories;
    }

}
