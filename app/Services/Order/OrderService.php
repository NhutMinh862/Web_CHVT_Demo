<?php

namespace App\Services\Order;

use App\Repositories\Order\OrderRepositoriesInterface;
use App\Services\BaseService;
use function Symfony\Component\Translation\t;

class OrderService extends BaseService implements OrderServiceInterface
{
    public $repository;
    public function __construct(OrderRepositoriesInterface $orderRepositories)
    {
        $this->repository = $orderRepositories;
    }

    public function getOrderByUser($userId)
    {
        return $this->repository->getOrderByUser($userId);
    }
}
