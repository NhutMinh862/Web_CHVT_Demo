<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Services\Blog\BlogsServiceInterface;
use App\Services\Brand\BrandServiceInterface;
use App\Services\Product\ProductServiceInterface;
use App\Services\ProductCategory\ProductCategoryServiceInterface;
use Illuminate\Http\Request;

class HomeConTroller extends Controller
{
    private $productService;
    private $blogSevice;
    private $productCategoryService;
    private $brandService;
    public function __construct(ProductServiceInterface $productService,
                                BlogsServiceInterface   $blogService,
                                ProductCategoryServiceInterface $productCategoryService,
                                BrandServiceInterface $brandService)
    {
        $this->productService = $productService;
        $this->blogSevice = $blogService;
        $this->productCategoryService = $productCategoryService;
        $this->brandService = $brandService;
    }

    public function index()
    {
        $products = $this->productService->all();
        $categories = $this->productCategoryService->all();
        $brands = $this->brandService->all();
        $featuredProducts = $this->productService->getFeaturedProductsByCategory();
        $blogs = $this->blogSevice->getLatestBlogs();
        return view('front.main', compact('products','categories', 'brands', 'featuredProducts', 'blogs'));

    }
    public function contact(Request $request)
    {
        $categories = $this->productCategoryService->all();
        return view('front.contact-about.contact', compact('categories'));
    }
    public function about(Request $request)
    {
        $categories = $this->productCategoryService->all();
        return view('front.contact-about.about', compact('categories'));
    }
}
