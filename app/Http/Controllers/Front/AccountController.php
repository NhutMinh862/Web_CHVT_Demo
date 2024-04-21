<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Services\Brand\BrandServiceInterface;
use App\Services\Order\OrderServiceInterface;
use App\Services\Product\ProductServiceInterface;
use App\Services\ProductCategory\ProductCategoryServiceInterface;
use App\Services\User\UserServiceInterface;
use App\Utilities\Constant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    private $userService;
    private $orderService;
    private $productCategoryService;
    private $productService;
    public function __construct(UserServiceInterface $userService,
                                OrderServiceInterface $orderService,
                                ProductCategoryServiceInterface $productCategoryService,
                                ProductServiceInterface $productService)
    {
        $this->userService = $userService;
        $this->orderService = $orderService;
        $this->productCategoryService = $productCategoryService;
        $this->productService = $productService;
    }

    public function login()
    {
        $categories = $this->productCategoryService->all();
        $products = $this->productService->all();
        return view('front.account.login',compact('categories', 'products'));
    }
    public function checkLogin(Request $request)
    {
        //Thông tin xác thực = credentials
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
            'level' => Constant::user_level_client, //Khách hàng bình thường
        ];
        $remember = $request->remember;
        //Sử dụng Auth::attempt của lavarel để xác thực tài khoản đăng nhập
        if(Auth::attempt($credentials, $remember)){
            //return redirect('');
            return redirect()->intended(''); // Mặc định là trang chủ
        }else{
            return back()->with('notification', 'ERROL: Your email or password is incorrect! Please re-enter.');
        }
    }
    public function logout()
    {
        Auth::logout();
        return back();
    }
    public function register()
    {
        $categories = $this->productCategoryService->all();
        $products = $this->productService->all();
        return view('front.account.register',compact('categories', 'products'));
    }
    public function postRegister(Request $request)
    {
        if($request->password != $request->password_confirmation){
            return back()->with('notification', 'ERROL: Confirm password does not match.');
        }
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password, //mật khẩu chưa được mã hóa thì dùng bcrypt($request->password)
            'level' => Constant::user_level_client, //Đăng kí tài khoản khách hàng bình thường
        ];
        $this->userService->create($data);
        return redirect('account/login')->with('notification', 'Register Success! Please login.');
    }

    public function myOrderIndex()
    {
        $orders = $this->orderService->getOrderByUser(Auth::id());
        $categories = $this->productCategoryService->all();
        $products = $this->productService->all();
        return view('front.account.my-order.index', compact('orders','categories', 'products'));
    }
    public function myOrderShow($id)
    {
        $order = $this->orderService->find($id);
        $categories = $this->productCategoryService->all();
        $products = $this->productService->all();
        return view('front.account.my-order.show', compact('order','categories', 'products'));
    }
}
