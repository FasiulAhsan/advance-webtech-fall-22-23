<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use Hash;
use Session;

class CustomAuthController extends Controller
{
   public function login(){
    return view('login');
   }

   public function loginuser(Request $request){
    $request->validate([
        'email'=>'required|email',
        'password'=>'required|min:8|max:15'
    ]);
    $user = user::where('email','=',$request->email)->first();
    if($user){
        if(Hash::check($request->password, $user->password)){
            $request->session()->put('loginId', $user->id);
            return redirect('dashboard');
        }
        else{
            return back()->with('fail', 'password not match.');
        }

    }
    else{
        return back()->with('fail', 'this email is not registered.');
    }

   }

   public function registration(){
    return view('registration');
   }

   public function registeruser(Request $request){
    $request->validate([
        'name'=>'required',
        'email'=>'required|email|unique:users',
        'password'=>'required|min:8|max:15'
    ]);
    $user = new User();
    $user->name = $request->name;
    $user->email = $request->email;
    $user->password =Hash::make($request->password);
    $res = $user->save();
    if($res) {
        return back()->with('success', 'Your Registration Complate');
    }
    else{
        return back()->with('fail', 'Something is Wrong');
    }

   }


   //public function dashboard(){
    //return view('dashboard');
   //}

   public function dashboard(){
   $data = array();
   if (Session::has('loginId'))
   {
    $data = User::where('id','=', Session::get('loginId'))->first(); 
  }
    return view('dashboard', compact('data'));
   }


 public function logout(){
    if(Session::has('loginId')){
        session::pull('loginId');
       return redirect ('login');

   }
 }

}
