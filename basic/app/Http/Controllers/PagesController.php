<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('home');
    }

    public function profile(){
        $name='M.X';
        $id='11-11111-1';
        $dob='11/11/11';
        $names=array("M. X",'M. Y', 'M. Z');

        return view('profile') 
        ->with('name',$name)
        ->with('id',$id)
        ->with('dob',$dob)
        ->with('names',$names);
    }

     function other(){

        $name="Jhon";
        $profession="Teacher";
        $address="20,Baker Street";

        $ages=["Rahim"=>"34","Karim"=>"40","Akash"=>"25"];

        return view("other",[
            "name"=>$name,
            'profession'=>$profession,
            'address'=>$address
        ]  ) ->with('ages',$ages);
    } 

        public function registration(){
            return view("registration");
        }

        public function register(request $request){
            $output = "<h1>Submitted</h1>";
            $output.="Name : ".$request->name;
            $output.="<br>Profession : ".$request->profession;
            $output.="<br>Address :".$request->address;
            return $output;
        }






}

