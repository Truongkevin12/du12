<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helper\CartHelper;
use App\Models\product;
use Auth;
use App\Cart;

class CartController extends Controller
{

    public function view(cartHelper $cart){
        return view('client/cart',compact('cart'));
    }
    public function add(cartHelper $cart ,$id){
       $product = product::find($id);
        $cart ->add($product);
        return redirect('cart/view');
    }
    public function remove(cartHelper $cart ,$id){
         $cart ->remove($id);
         // dd(session('cart'));
         return redirect()->back();
     }
     public function update(Request $request, cartHelper $cart ,$id, $quantity){
        $cart ->update($id,$quantity, $request->add);
        // dd(session('cart'));
        return redirect()->back();
    }
    public function clear(cartHelper $cart){
        $cart ->clear();
        return redirect()->back();
    }

    public function getCheckOut(cartHelper $cart ){
         return view('client/checkout',compact('cart'));
     }
    //  public function getCheckOut() {
    //     $this->data['title'] = 'Check out';
    //     $this->data['cart'] =  Cart::content();
    //     $this->data['total'] = Cart::total();
    //     return view('client/checkout', $this->data);
    // }




}
