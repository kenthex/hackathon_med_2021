<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Brand;
use Illuminate\Support\Facades\Auth;


class CatalogController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        if(Auth::check())
            $this->middleware('auth');
    }

    public function index() {

        $roots = Category::get();
        return view('catalog.index', compact('roots'));
    }

    public function category($slug) {
        $category = Category::where('slug', $slug)->firstOrFail();
        return view('catalog.category', compact('category'));
    }

    public function brand($slug) {
        $brand = Brand::where('slug', $slug)->firstOrFail();
        return view('catalog.brand', compact('brand'));
    }

    public function product($slug) {
        $product = Product::where('slug', $slug)->firstOrFail();
        return view('catalog.product', compact('product'));
    }
}
