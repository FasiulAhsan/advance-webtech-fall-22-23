<?php

namespace App\Http\Controllers;
use App\Models\User;
use Session;

use Illuminate\Http\Request;

class crudOperationController extends Controller
{
   public function index(){
    $data = User::get();
    return view ('user-list', compact('data'));
   }

   public function editUser($id){
    $data = User::where('id', '=', $id)->first();
    return view('edit-user', compact('data'));
   }

   public function updateUser (Request $request){
    $request->validate([
        'name' => 'required',
        'name' => 'required|email',
        'name' => 'required'
    ]);

    $id = $request->id;
    $name = $request->name;
    $email = $request->email;
    $password = $request->password;
      
    $data = User::where('id', '=', $id)->update([
        'name' => $name,
        'email' => $email,
        'password' => $password
    ]);
    return redirect ()->back()->with('Success','User Update Successfully');
   }

   public function deleteUser($id){
    $data = User::where('id', '=', $id)->delete();
    return redirect ()->back()->with('Success','User Delete Successfully');

   }
}
