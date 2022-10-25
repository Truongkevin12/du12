<?php

namespace App\Http\Controllers;
use App\Models\categories;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

use App\Models\users;
use DB;
use Illuminate\Support\Facades\Auth;



class adminController extends Controller

{
   //phan quyền đăng nhập
   function __construct(){
      $this->middleware('auth');
   }
   //loai hàng
   function add(){
      $category= categories::orderBy('name','ASC')->get();
      return view("admin/loai/add",compact('category'));
  }
  function add_(){
      $t = new categories;
      $t->name=$_POST['name'];
      $t->image=$_POST['image'];
      $t->parent_id=$_POST['parent_id'];
      $t->save();
      return redirect('admin/loai/list');
  }
    function danhsach(){
        $data= categories::all();
        return view('admin/loai/list',['data'=>$data]);
    }
     function delete($id){
      $t = categories::find($id);
      if ($t==null) return redirect('/thongbao');
      $t->delete();
      return redirect('admin/loai/list');
    }
  function edit($id){

   $t =categories::find($id);
   if ($t==null) return redirect('/thongbao');

   return view('admin/loai/edit',['categories'=>$t]);
}
function edit_($id){
   $t =categories::find($id);
   if ($t==null) return redirect('/thongbao');
   $t->name=$_POST['name'];
   $t->image=$_POST['image'];
   $t->save();
   return redirect('/admin/loai/list');

}
  //sản phẩm
  //thêm sản phẩm
  function addsanpham(){
   $category= categories::orderBy('name','ASC')->get();
   return view("admin/sanpham/add",compact('category'));
}
function addsanpham_(){
   $t = new Product;
   $t->name=$_POST['name'];
   $t->price=$_POST['price'];
   $t->cost=$_POST['cost'];
   $t->discount=$_POST['discount'];
   $t->capacity=$_POST['capacity'];
   $t->id_category=$_POST['id_category'];
   $t->image=$_POST['image'];
   $t->description=$_POST['description'];
   $t->save();
   return redirect('admin/sanpham/list');
}
//danh sách sản phẩm
     function listsanpham(){
        $data= Product::all();
        return view('admin/sanpham/list',['data'=>$data]);
     }
//xoá sản phẩm
     function deletesanpham($id){
      $sp = Product::find($id);
      if ($sp==null) return redirect('/thongbao');
      $sp->delete();
      return redirect('admin/sanpham/list');
  }
  //edit sản phẩm
  function editsanpham($id){

   $t =Product::find($id);
   if ($t==null) return redirect('/thongbao');

   return view('admin/sanpham/edit',['products'=>$t]);
}
function editsanpham_($id){
   $t =Product::find($id);
   if ($t==null) return redirect('/thongbao');
   $t->name=$_POST['name'];
   $t->price=$_POST['price'];
   $t->cost=$_POST['cost'];
   $t->discount=$_POST['discount'];
   $t->capacity=$_POST['capacity'];
   $t->id_category=$_POST['id_category'];
   $t->image=$_POST['image'];
   $t->description=$_POST['description'];
   $t->save();
   return redirect('/admin/sanpham/list');

}

     function listkhachhang(){
      $data= users::all();
      return view('admin/khachhang/list',['data'=>$data]);
   }


   function listdonhang(){
    $data= Order::all();
    return view('admin/donhang/list',['data'=>$data]);
 }
 function detailsDonHang($order_id=0){
    $DetailsCart= DB::table('order_product')->where('order_id',$order_id)->first();
    $data = ['order_product'=>$DetailsCart];
    return view('admin/donhang/details',$data);
}

      public function logout(Request $request)
{
    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/');
   }
}
