<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;

class ProductController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $productCates = ProductCategory::query()->with(["products"])->where(["is_active" => 1])->where("id", "!=", 1)->get()->toArray();
        return view('product-list', [
            'productCates' => $productCates
        ]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function show($slug)
    {
        $product = Product::where(["is_active" => 1, "slug" => $slug])->first();

        if (!$product) {
            return redirect(route("home"));
        }

        $products = Product::query()->with(["product_category"])
            ->where(["is_active" => 1])
            ->where("slug", "!=", $slug)->limit(16)->get();

        return view('product', [
            "product" => $product,
            "products" => $products,
        ]);
    }

    public function productCategory($slug){
        $products = Product::query()->whereHas("product_category", function($q) use($slug){
            $q->where("product_categories.slug", $slug);
        })->with(["product_category"])->where(["is_active" => 1])->paginate(16)->withQueryString();
        return view('product-list', [
            'products' => $products
        ]);
    }
}
