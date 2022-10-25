<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use App\cart;
use Mail;
use Illuminate\Support\Facades\Auth;
class productController extends Controller

{
    // function index(){
    // // $categoies=DB::table('categories')->select('id','name','parent_id')->where ('parent_id',0)->limit(7)->get();
    // // $categoieslimit=categories::where('parent_id',0)->take(4)->get();
    //     $categoies =categories::with('children')->get();
    //     return view('client/index',compact('categoies'));
    // }

    function details($id=0){
        $products=DB::table('products')->where('id',$id)->first();
        $data = ['products'=>$products];
        return view('client/products/details',$data);
    }
    function products($id_category){
        $listsp = DB::table('products')->where('id_category',$id_category)->get();
        $tieude = DB::table('categories')->where('id',$id_category)->value('name');

        $data = ['id_category',$id_category,'listsp'=>$listsp,'tieude'=> $tieude];
        return view('client/products/list',$data);
    }
    //gio hàng
    public function AddCart(Request $reg,$id){
        $products=DB::table('products')->where('id',$id)->first();
        if($products != null){
            $Oldcart = Session('Cart') ? Session('Cart') : null;
            $newCart = new Cart($Oldcart);
            $newCart->AddCart($products,$id);
            $reg->session()->put('Cart',$newCart);
            // dd(Session('Cart'));
        }
        $name='Hoàn Nam Mobile';
        Mail::send('email.tets',compact('name'),function($email){
            $email->subject('Đơn hàng');
            $email->to('utnguyen.aup@gmail.com','Hoàn Nam Moblie');
        });

        return view('client/cart',compact('newCart'));

    }

}






