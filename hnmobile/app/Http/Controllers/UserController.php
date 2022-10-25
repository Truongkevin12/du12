<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;




class UserController extends Controller
{
    public function GetDangnhapAdmin(){
        return view('client.auth.login');
    }
    public function PostDangnhapAdmin(Request $request){
        $request->validate([
            'password' => ['required','min:3','max:20'],
            'email' => 'email|ends_with:@gmail.com'
            ]
         );
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){

                if( Auth::user()->role == 1){
                    return redirect('admin/loai/list');
                }
                else{
                    return redirect('/');
                }

        }else{
            return redirect('dangnhap')->with('thongbao','Đăng nhập không thành công');

        }

    }
    public function registration()
    {
        return view('client.auth.registration');
    }

    public function postRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();
        $check = $this->create($data);

        return redirect("dashboard")->withSuccess('Great! You have Successfully loggedin');
    }

    public function logout(Request $request)
        {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }


}
