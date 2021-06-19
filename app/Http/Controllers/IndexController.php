<?php
namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class IndexController extends Controller {
    public function __invoke(Request $request){
        $roots = Category::get();
        return view('catalog.index', compact('roots'));
    }
}
