<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoryId = request('category_id');

        $categoryName = null;

       if($categoryId){

           $category = Category::find($categoryId);
           $categoryName = ucfirst($category->name);

           $products = $category->allProducts();
       }
       else{
           $products = Product::take(10)->get();
       }

        return view('product.index', compact('products', 'categoryName'));
    }

    public function search(Request $request)
    {

        $query = $request->input('query');

        $products = Product::where('name','LIKE',"%$query%")->paginate(10);

        return view('product.catalogue',compact('products'));;
    }
}
