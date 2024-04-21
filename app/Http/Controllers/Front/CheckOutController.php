<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Services\Order\OrderServiceInterface;
use App\Services\OrderDetail\OrderDetailServiceInterface;
use App\Services\ProductCategory\ProductCategoryServiceInterface;
use App\Utilities\Constant;
use App\Utilities\VNPay;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CheckOutController extends Controller
{
    private $orderService;
    private $orderDetailService;
    private $productCategoryService;
    public function __construct(OrderServiceInterface $orderService,
                                OrderDetailServiceInterface $orderDetailService,
                                ProductCategoryServiceInterface $productCategoryService)
    {
        $this->orderService = $orderService;
        $this->orderDetailService = $orderDetailService;
        $this->productCategoryService = $productCategoryService;
    }

    public function index()
    {
        $carts = Cart::content();
        $total = Cart::total();
        $subtotal = Cart::subtotal();
        $categories = $this->productCategoryService->all();
        return view('front.checkout.check-out', compact('carts', 'total', 'subtotal', 'categories'));
    }
    public function addOrder(Request $request)
    {
        $data = $request->all();
        $data['status'] = Constant::order_status_ReceiveOrders;
        //01.Thêm đơn hàng
        $order = $this->orderService->create($data);
        //02.Thêm chi tiết đơn hàng
        $carts = Cart::content();
        foreach ($carts as $cart){
            $data = [
                'order_id'=> $order->id,
                'product_id'=> $cart->id,
                'qty'=> $cart->qty,
                'amount'=> $cart->price,
                'total'=> $cart->qty * $cart->price,
            ];
            $this->orderDetailService->create($data);
        }

        if ($request->payment_type == 'pay_later'){
            //Gửi email:
            $total = Cart::total();
            $subtotal = Cart::subtotal();
            $this->sendEmail($order, $total, $subtotal); //Gọi hàm gửi email đã viết


            //03.Xóa giỏ hàng
            Cart::destroy();
            //04.Trả về kết quả thông báo
            return redirect('checkout/result')->with('notification', 'Success! You will pay on delivery. Please, check your email.');
        }
        if ($request->payment_type == 'online_payment'){
            //01. Lấy URL thanh toán VNPay
            $data_url = VNPay::vnpay_create_payment([
                'vnp_TxnRef' => $order->id, //ID của đơn hàng
                'vnp_OrderInfo' => 'Mô tả đơn hàng ở đây...', //Mô tả đơn hàng (tùy ý điền)
                'vnp_Amount' => Cart::total(0, '', '') * 24826, // Tổng giá của đơn hàng nhân với tỉ giá để sang tiền Việt
            ]);
            //02. Chuyển tới URL lấy được:
            return redirect()->to($data_url);
        }
    }
    public function vnPayCheck(Request $request)
    {
        //01. Lấy data từ URL (do VNPay gửi qua $vnp_Returnurl):
        $vnp_ResponseCode = $request->get('vnp_ResponseCode'); //phản hồi thanh toán hợp lệ: 00 = Thành công
        $vnp_TxnRef = $request->get('vnp_TxnRef'); //order_id
        $vnp_Amount = $request->get('vnp_Amount'); //Số tiền thanh toán

        //02. Kiểm tra data. Xem kết quả giao dịch trả về từ VNPay hợp lệ không:
        if ($vnp_ResponseCode != null){
            //Cập nhật trạng thái order
            $this->orderService->update(['status' => Constant::order_status_Paid], $vnp_TxnRef);
            if ($vnp_ResponseCode == 00){
                //Gửi email:
                $order = $this->orderService->find($vnp_TxnRef); //$vnp_TxnRef = orderID
                $total = Cart::total();
                $subtotal = Cart::subtotal();
                $this->sendEmail($order, $total, $subtotal); //Gọi hàm gửi email đã viết
                //Xóa giỏ hàng
                Cart::destroy();
                //Thông báo kq
                return redirect('checkout/result')
                    ->with('notification', 'Success! Has paid online. Please, check your email.');
            }else{
                //Xóa đơn hàng đã thêm vào database
                $this->orderService->delete($vnp_TxnRef);
                //Thông báo kết quả
                return redirect('checkout/result')
                    ->with('notification', 'Errol: Payment failed or canceled');
            }
        }
    }
    public function result()
    {
        $notification = session('notification');
        $categories = $this->productCategoryService->all();

        return view('front.checkout.result', compact('notification', 'categories'));
    }
    private function sendEmail($order, $total, $subtotal)
    {
        $email_to = $order->email;
        Mail::send('front.checkout.email',
            compact('order', 'total', 'subtotal'),
            function ($message) use ($email_to) {
                $message->from('phiphuong222@gmail.com', 'vitinh tanphat');
                $message->to($email_to, $email_to);
                $message->subject('Order Notification');
        });
    }
}
