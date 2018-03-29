<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use Session;
use App\Cart;
class ProductController extends Controller
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
    public function getAddToCart(Request $request, $id){
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);
        $request->session()->put('cart',$cart);
       // dd($request->session()->get('cart'),'Product Added');
        return redirect()->route('products.index');
    }

    public function getReduce($id){
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->reduce($id);
        Session::put('cart',$cart);
        return redirect()->route('product.shoppingCart');
    }
    public function getCart(){
       if (!Session::has('cart')){
           return view('shop.shopping-cart');
       }
       $oldCart = Session::get('cart');
       $cart = new Cart ($oldCart);
      
       return view ('shop.shopping-cart',['products'=>$cart->items,'totalPrice'=>$cart->totalPrice]);
       //
    }
}
