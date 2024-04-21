<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Services\Blog\BlogsServiceInterface;
use App\Services\BlogComment\BlogCommentServiceInterface;
use App\Services\Brand\BrandServiceInterface;
use App\Services\Product\ProductServiceInterface;
use App\Services\ProductCategory\ProductCategoryServiceInterface;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    private $blogSevice;
    private $blogCommentService;
    private $productCategoryService;
    public function __construct(BlogsServiceInterface  $blogService,
                                BlogCommentServiceInterface $blogCommentService,
                                ProductCategoryServiceInterface $productCategoryService)
    {

        $this->blogSevice = $blogService;
        $this->productCategoryService = $productCategoryService;
        $this->blogCommentService = $blogCommentService;
    }
    public function index(Request $request)
    {
        $blogs = $this->blogSevice->all();
        $categories = $this->productCategoryService->all();
        return view('front.blog.main', compact('blogs', 'categories'));
    }
    public function show($id)
    {
        $categories = $this->productCategoryService->all();
        $blog= $this->blogSevice->find($id);
        return view('front.blog.show', compact('categories', 'blog'));
    }
    public function postComment(Request $request)
    {
        $this->blogCommentService->create($request->all());
        return redirect()->back();
    }

}
