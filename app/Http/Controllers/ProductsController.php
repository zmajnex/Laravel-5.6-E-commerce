<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class ProductsController extends Controller
{
    //
   /* public function __construct()
{
    $this->middleware('auth');
}*/
    public function getIndex(){
        $products = Product::all();
        return view('shop.index')->with('products',$products);
    }
}
