<?php

namespace App\Http\Controllers;

use App\Models\Product;

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
        $products = Product::query()->with(["product_category"])->where(["is_active" => 1])->where("product_category_id", "!=", 5)->paginate(16)->withQueryString();
        return view('product-list', [
            'products' => $products
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
