<?php

namespace App\Repositories\OrderDetail;

use App\Models\OrderDetail;
use App\Repositories\BaseRepositories;
use App\Repositories\OrderDetail\OrderDetailRepositoriesInterface;

class OrderDetailRepositories extends BaseRepositories implements OrderDetailRepositoriesInterface
{
    public function getModel()
    {
        return OrderDetail::class;
    }
}
