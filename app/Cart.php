<?php

namespace App;



class Product 
{
    //$items holds individual products,group of products
    public $items;
    //
    public $totalQty = 0;
    public $totalPrice = 0;
    //The cart will be recreated every time you add new item, with previous items
    //__construct method is for passing previous items
    public function __construct($oldCart){
     //Checking if we have something in cart
     if($oldCart){
         $this->items = $oldCart->items;
         $this->totalQty = $oldCart->totalQty;
         $this->totalPrice = $oldCart->totalPrice;
     }
    }
    //add new item with $id
 public function add($item,$id){
    $storedItem = [
        'qty'=>0,
        'price'=>$item->price,
        'item'=>$item
    ]
 }
}