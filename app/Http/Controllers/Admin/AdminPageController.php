<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\Blog\BlogsServiceInterface;
use App\Services\Order\OrderServiceInterface;
use App\Services\Product\ProductServiceInterface;
use Illuminate\Http\Request;

class AdminPageController extends Controller
{
    private $productService;
    private $orderService;
    private $blogsService;
    public function __construct(ProductServiceInterface $productService,
                                OrderServiceInterface $orderService,
                                BlogsServiceInterface $blogsService)
    {
        $this->blogsService = $blogsService;
        $this->orderService = $orderService;
        $this->productService = $productService;
    }
    public function index()
    {
        $blogs = $this->blogsService->getLatestBlogs();
        $products = $this->productService->all();
        $orders = $this->orderService->all();
        return view('admin.home', compact('blogs', 'products', 'orders'));
    }
}
