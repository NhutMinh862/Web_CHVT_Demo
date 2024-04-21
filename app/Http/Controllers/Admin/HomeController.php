<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Statistic;
use App\Utilities\Constant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function getLogin()
    {
        return view('admin.login');
    }

    public function postLogin(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
            'level' => [Constant::user_level_host, Constant::user_level_admin], //Tài khoản cấp độ Host hoặc Admin
        ];
        $remember = $request->remember;
        //Sử dụng Auth::attempt của lavarel để xác thực tài khoản đăng nhập
        if (Auth::attempt($credentials, $remember)) {
            return redirect()->intended('admin'); // Mặc định là trang chủ
        } else {
            return back()->with('notification', 'ERROL: Your email or password is incorrect! Please re-enter.');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('admin/login');
    }

    public function filter_by_date(Request $request)
    {
        $data = $request->all();
        $from_date = $data['from_date'];
        $to_date = $data['to_date'];
        $get = Statistic::whereBetween('order', [$from_date, $to_date])->orderBy('order_date', 'ASC')->get();
        foreach ($get as $key => $val) {
            $chart_data[] = array(
                'period' => $val->order_date,
                'order' => $val->total_order,
                'sales' => $val->sales,
                'profit' => $val->profit,
                'quantity' => $val->quantity,
            );
        }
        echo $data = json_encode($chart_data);
    }
}
