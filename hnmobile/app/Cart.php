<?php
namespace App;
class cart{
    public $products = null;
    public $totalPrice = 0;
    public $totalQuanty = 0;
    public function __construct($cart){
        if ($cart) {
            $this->products = $cart -> products;
            $this->totalPrice = $cart -> totalPrice;
            $this->totalQuanty = $cart -> totalQuanty;


        }
    }
    public function AddCart($products,$id){
        $newProduct = ['quanty'=>0,'price'=>$products->price,'productInfo'=>$products];
       if ($this->products) {
            if (array_key_exists($id,$this->products)) {
            $newProduct = $this->products[$id];
            }
        
        }
        $newProduct['quanty']++;
        $newProduct['price'] = $newProduct['quanty'] * $products->price;
        $this->products[$id]=$newProduct;
        $this->totalPrice += $products->price;
        $this->totalQuanty++;

}
}



?>