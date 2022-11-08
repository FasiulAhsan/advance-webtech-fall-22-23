<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class formValidationController extends Controller
{
    public function formValidation(){
        return view('form-validation');
    }

    public function submitValidation(Request $request) {
       $request->validate([
        'name'=>'required|min:1|max:20',
        'email'=>'required|email|unique:users',
        'password'=>'required|regex:^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$',
        'dob'=>'required|before:today',
        'phone'=>'required|numeric|digits:11'

       ]);
     }
}
