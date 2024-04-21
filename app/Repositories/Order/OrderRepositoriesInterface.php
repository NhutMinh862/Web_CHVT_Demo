<?php

namespace App\Repositories\Order;

use App\Repositories\RepositoriesInterface;

interface OrderRepositoriesInterface extends RepositoriesInterface
{
    public function getOrderByUser($userId);
}
