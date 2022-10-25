<?php
namespace App\Helper;
class CartHelper{
    public $items=[];
    public $total_quantity=0;
    public $total_price=0;




    public function __construct(){
        $this->items = session('cart') ? session('cart') : [];
        $this->total_price = $this->get_total_price();
        $this->total_quantity = $this->get_total_quantity();

    }
    public function add($product,$quantity=1){
        $item =[
            'id' =>$product->id,
            'name' =>$product->name,
            'price' =>$product->price,
            'image' =>$product->image,
            'quantity' =>$quantity,

        ];
        if (isset($this->items[$product->id])) {
            $this->items[$product->id]['quantity'] +=$quantity;
        }else{
            $this->items[$product->id]=$item;
        }

        $this->total_price = $this->get_total_price();
        $this->total_quantity = $this->get_total_quantity();
        session(['cart' => $this->items]);
        // dd($this->items);
    }
    public function remove($id){
        if (isset($this->items[$id])) {
            unset($this->items[$id]);
        }
        session(['cart' => $this->items]);
    }

    public function update($id, $quantity = 1, $add) {
        if (isset($this->items[$id])) {
            if ($add) {
                $this->items[$id]['quantity'] += $quantity;
            } else {
                $this->items[$id]['quantity'] -= $quantity;
            }
            if ($this->items[$id]['quantity'] == 0) {
                unset($this->items[$id]);
            }
        }
        $this->total_price = $this->get_total_price();
        $this->total_quantity = $this->get_total_quantity();
        session(['cart' => $this->items]);
    }

    public function clear(){
        session(['cart' => '']);
    }
    private function get_total_price(){
        $t=0;
        foreach ($this->items as $item) {
            $t+=$item['price']*$item['quantity'];
        }
        return $t;
    }
    private function get_total_quantity(){
        $t=0;
        foreach ($this->items as $item) {
            $t +=$item['quantity'];
        }
        return $t;
    }




}
