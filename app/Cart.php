<?php

namespace App;



class Cart 
{
    //$items holds individual products,group of products
    public $items=null;
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
     //$storedItems is our group of items
    $storedItem = [
        'qty'=>0,
        'price'=>$item->price,
        'item'=>$item
    ];
    /*Checking if have anything in the cart and if we have we 
    need to check is this item that we adding already in the cart
    */
    if($this->items){
        if(array_key_exists($id,$this->items)){
            $storedItem = $this->items[$id];
        }

    }
    $storedItem['qty']++;
    $storedItem['price']=$item->price * $storedItem['qty'];
    $this->items[$id]=$storedItem;
    $this->totalQty++;
    $this->totalPrice += $item->price;
 }
  public function reduce($id){
    $this->items[$id]['qty']--;
    $this->items[$id]['price']-=$this->items[$id]['item']['price'];
    $this->totalQty--;
    $this->totalPrice-=$this->items[$id]['item']['price'];
    if($this->items[$id]['qty']<=0){
        unset($this->items[$id]);
    }
  }
  public function removeItem($id){
    $this->totalQty-=$this->items[$id]['qty'];;
    $this->items[$id]['price']-=$this->items[$id]['price'];
    unset($this->items[$id]);
  }
}