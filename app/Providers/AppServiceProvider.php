<?php

namespace App\Providers;

use App\Repositories\Blog\BlogRepositories;
use App\Repositories\Blog\BlogRepositoriesInterface;
use App\Repositories\BlogComment\BlogCommentRepositories;
use App\Repositories\BlogComment\BlogCommentRepositoriesInterface;
use App\Repositories\Brand\BrandRepositories;
use App\Repositories\Brand\BrandRepositoriesInterface;
use App\Repositories\Brand\OrderRepositoriesInterface;
use App\Repositories\Order\OrderRepositories;
use App\Repositories\OrderDetail\OrderDetailRepositories;
use App\Repositories\OrderDetail\OrderDetailRepositoriesInterface;
use App\Repositories\Product\ProductRepositories;
use App\Repositories\Product\ProductRepositoriesInterface;
use App\Repositories\ProductCategory\ProductCategoryRepositories;
use App\Repositories\ProductCategory\ProductCategoryRepositoriesInterface;
use App\Repositories\ProductCategory\ProductCategoryService;
use App\Repositories\ProductCategory\ProductCategoryServiceInterface;
use App\Repositories\ProductComment\ProductCommentRepositories;
use App\Repositories\ProductComment\ProductCommentRepositoriesInterface;
use App\Repositories\ProductComment\ProductCommentRepository;
use App\Repositories\ProductComment\ProductCommentRepositoryInterface;
use App\Repositories\User\UserRepositories;
use App\Repositories\User\UserRepositoriesInterface;
use App\Services\Blog\BlogsService;
use App\Services\Blog\BlogsServiceInterface;
use App\Services\BlogComment\BlogCommentService;
use App\Services\BlogComment\BlogCommentServiceInterface;
use App\Services\Brand\BrandService;
use App\Services\Brand\BrandServiceInterface;
use App\Services\Order\OrderService;
use App\Services\Order\OrderServiceInterface;
use App\Services\OrderDetail\OrderDetailService;
use App\Services\OrderDetail\OrderDetailServiceInterface;
use App\Services\Product\ProductService;
use App\Services\Product\ProductServiceInterface;
use App\Services\ProductComment\BlogService;
use App\Services\ProductComment\BlogServiceInterface;
use App\Services\ProductComment\ProductCommentService;
use App\Services\ProductComment\ProductCommentServiceInterface;
use App\Services\User\UserService;
use App\Services\User\UserServiceInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //Product
        $this->app->singleton(
            ProductRepositoriesInterface::class,
            ProductRepositories::class
        );
        $this->app->singleton(
            ProductServiceInterface::class,
            ProductService::class
        );

        //ProductComment
        $this->app->singleton(
            ProductCommentRepositoriesInterface::class,
            ProductCommentRepositories::class
        );
        $this->app->singleton(
            ProductCommentServiceInterface::class,
            ProductCommentService::class
        );

        //Blog
        $this->app->singleton(
            BlogRepositoriesInterface::class,
            BlogRepositories::class
        );
        $this->app->singleton(
            BlogsServiceInterface::class,
            BlogsService::class
        );

        //BlogComments
        $this->app->singleton(
            BlogCommentRepositoriesInterface::class,
            BlogCommentRepositories::class
        );
        $this->app->singleton(
            BlogCommentServiceInterface::class,
            BlogCommentService::class
        );

        //ProductCategory
        $this->app->singleton(
            ProductCategoryRepositoriesInterface::class,
            ProductCategoryRepositories::class
        );
        $this->app->singleton(
            \App\Services\ProductCategory\ProductCategoryServiceInterface::class,
            \App\Services\ProductCategory\ProductCategoryService::class
        );
        //Brand
        $this->app->singleton(
            BrandRepositoriesInterface::class,
            BrandRepositories::class
        );
        $this->app->singleton(
            BrandServiceInterface::class,
            BrandService::class
        );
        //Order
        $this->app->singleton(
            \App\Repositories\Order\OrderRepositoriesInterface::class,
            OrderRepositories::class
        );
        $this->app->singleton(
            OrderServiceInterface::class,
            OrderService::class
        );
        //OrderDetail
        $this->app->singleton(
            OrderDetailRepositoriesInterface::class,
            OrderDetailRepositories::class
        );
        $this->app->singleton(
            OrderDetailServiceInterface::class,
            OrderDetailService::class
        );
        //User
        $this->app->singleton(
            UserRepositoriesInterface::class,
            UserRepositories::class
        );
        $this->app->singleton(
            UserServiceInterface::class,
            UserService::class
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
