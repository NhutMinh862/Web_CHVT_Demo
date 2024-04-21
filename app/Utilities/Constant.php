<?php

namespace App\Utilities;

class Constant
{
    /*
     * Chứa các hàng số, role dùng chung
     */

    //Order
    const order_status_ReceiveOrders = 1; //nhận đơn đặt hàng
    const order_status_Unconfirmed = 2; //Chưa xác nhận
    const order_status_Confirmed = 3; //Đã xác nhận
    const order_status_Paid = 4; //Đã thanh toán
    const order_status_Processing = 5; //Đang xử lí
    const order_status_Shipping = 6; //Đang giao hàng
    const order_status_Finish = 7; //Đã nhận hàng
    const order_status_Cancel= 0; //Hủy hàng
    public static $oder_status = [
        self::order_status_ReceiveOrders => 'Receive Orders',
        self::order_status_Unconfirmed => 'Unconfirmed',
        self::order_status_Confirmed => 'Confirmed',
        self::order_status_Paid => 'Paid',
        self::order_status_Processing => 'Processing',
        self::order_status_Shipping => 'Shipping',
        self::order_status_Finish => 'Finish',
        self::order_status_Cancel=> 'Cancel',
    ];

    //User
    const user_level_host = 0;
    const user_level_admin = 1;
    const user_level_client = 2;
    public static $user_level = [
        self::user_level_host => 'host',
        self::user_level_admin => 'admin',
        self::user_level_client => 'client',
    ];
}
