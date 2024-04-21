<?php

namespace App\Repositories\Order;

use App\Models\Order;
use App\Repositories\BaseRepositories;
use App\Repositories\Order\OrderRepositoriesInterface;

class OrderRepositories extends BaseRepositories implements OrderRepositoriesInterface
{
    public function getModel()
    {
        return Order::class;
    }

    public function getOrderByUser($userId)
    {
        return $this->model
            ->where('user_id', $userId)
            ->get();
    }
}
