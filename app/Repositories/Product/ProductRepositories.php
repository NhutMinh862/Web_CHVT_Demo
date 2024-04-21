<?php

namespace App\Repositories\Product;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Repositories\BaseRepositories;
use Illuminate\Http\Request;

class ProductRepositories extends BaseRepositories implements ProductRepositoriesInterface
{

    public function getModel()
    {
        return Product::class;
    }
    public function getRelatedProduct($product, $limit = 4)
    {
        return $this->model->where('product_category_id',$product->product_category_id)
            ->limit($limit)
            ->get();
    }
    public function getFeaturedProductsByCategory(int $categoryId)
    {
        return $this->model->where('featured', true)
            ->where('product_category_id', $categoryId)
            ->get();
    }
    public function getProductOnPC($request)
    {
        $search = $request->search ?? '' ;
        $products = $this->model->where('name', 'like', '%' . $search . '%');
        $products = $this->filter($products, $request);
        $products = $this->sortAndPanigation($products, $request);
        return $products;
    }
    public function getProductsByCategory($categoryName, $request)
    {
        $products = ProductCategory::where('name', $categoryName)->first()->products->toQuery();
        $products = $this->filter($products, $request);
        $products = $this->sortAndPanigation($products, $request);
        return $products;
    }
    private function sortAndPanigation($products, Request $request)
    {
        $perPage = $request->show ?? 8 ;
        $sort_By = $request->sort_by ?? 'latest' ;
        switch ($sort_By)
        {
            case 'latest':
                $products = $products->orderBy('id');
                break;
            case 'oldest':
                $products = $products->orderByDesc('id');
                break;
            case 'name-ascending':
                $products = $products->orderBy('name');
                break;
            case 'name-descending':
                $products = $products->orderByDesc('name');
                break;
            case 'price-ascending':
                $products = $products->orderBy('price');
                break;
            case 'price-descending':
                $products = $products->orderByDesc('price');
                break;
            default:
                $products = $products->orderBy('id');
        }
        $products = $products->paginate($perPage);
        $products->appends(['sort_by'=>$sort_By, 'show'=>$perPage]);
        return $products;
    }
    private function filter($products, Request $request)
    {
        //Brand
        $brands = $request->brand ?? [];
        $brand_ids = array_keys($brands);
        $products = $brand_ids != null ? $products->whereIn('brand_id', $brand_ids) : $products;

        //Price
        $priceMin = $request->price_min;
        $priceMax = $request->price_max;
        $priceMin = str_replace('$', '', $priceMin);
        $priceMax = str_replace('$', '', $priceMax);
        $products = ($priceMin != null && $priceMax != null)
            ? $products->whereBetween('price', [$priceMin, $priceMax]) : $products;
        return $products;
    }
}
