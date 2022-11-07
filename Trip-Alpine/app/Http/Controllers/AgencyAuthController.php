<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; 
use Hash;
use Session;

class AgencyAuthController extends Controller
{
    public function login(){
        return view('login');

    }

    public function loginUser(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:5|max:10',
        ]);
        $user = User::where('email','=', $request->email)->first();
        if($user){
            if(Hash::check($request->password,$user->password)){
                $request->session()->put('loginId', $user->id);
                return redirect('dashboard');
            }
            else{
                return back()->with('fail','Password is incorrect');
            }

        }
        else{
            return back()->with('fail','This email is not registerd');
        }
    }





    public function registration(){
        return view ('registration');

    }
    public function registerUser(Request $request){
        $request->validate([
            'name'=>'required|min:1|max:25',
            'nid'=>'required|min:8|numeric|unique:users',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:5|max:10',
            'agency_name'=>'required|min:2',
            'agency_code'=>'required|min:3|numeric|unique:users',
            
        ]); 
        $user = new User();
        $user->name = $request->name;
        $user->nid = $request->nid;
        $user->email = $request->email;
        $user->password =Hash::make($request->password);
        $user->agency_name = $request->agency_name;
        $user->agency_code = $request->agency_code;
        $res =$user->save();
        if($res){
            return back()->with('success', 'You have Registered suucessful y');
        }
        else{
            return back()->with('fail', 'Something is Wrong');
        }
    }



    public function dashboard(){
        $data = array();
        if(Session::has('loginId')){
            $data = User::where('id','=', Session::get('loginId'))->first(); 
        }

        return view('dashboard', compact ('data'));
    }

    public function logout(){
        if(Session::has('loginId')){
            Session::pull('loginId');
            return redirect ('login');
        }
    }
}
