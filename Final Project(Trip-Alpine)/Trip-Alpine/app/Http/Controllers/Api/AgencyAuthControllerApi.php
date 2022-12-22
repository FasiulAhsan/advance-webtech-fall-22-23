<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User; 
use App\Models\tourPackage;
use Hash;
use Session;

class AgencyAuthControllerApi extends Controller
{
// registration of user 
 public function Register(Request $request){
        // $request->validate([
        //     'name'=>'required',
        //     'nid'=>'required|min:8|numeric|unique:users',
        //     'email'=>'required|',
        //     'password'=>'required',
        //     'agency_name'=>'required',
        //     'agency_code'=>'required',
            
        // ]); 
        try{
          $user = new User();
          $user->name = $request->name;
          $user->nid = $request->nid;
          $user->email = $request->email;
          $user->password =Hash::make($request->password);
          $user->agency_name = $request->agency_name;
          $user->agency_code = $request->agency_code;
          $res =$user->save();
   
             return response()->json([
                  'user'=>  $user,
                  'message' => ' successfully',
              ],200)
              
              ; 

        }
      
            catch(\Exception $exception){
 
              return response([
                   'message'=>$exception->getMessage()
               ],400);
               }      
         return response([
               'message'=>"Login Failed"
           ],401); 
       
    }

  public function Login (Request $req){
       try{
       $email= $req->email;
       $password=$req->password;
       $user = User::where('email',$email)->first();
        
        if($user){
            if(Hash::check($req->password, $user->password))
          { 
            return response()->json([
                'message' => 'User login successfully',
              
                'user'=>$user
            ],200
        
        );}
            
        }
       }
 catch(\Exception $exception){
 
           return response([
                'message'=>$exception->getMessage()
            ],400);
            }      
      return response([
            'message'=>"Login Failed"
        ],401);   
    }





      // testing part 
    public function all_packages(){
    $packages= tourPackage::get()->all();

      return response()->json([
                'packages'=> ( $packages),
            ],200); 
    }

    public function profile(Request $request ){

      $id= $request->header("auth");  
      $var = User::find($id);
      return response()->json([
        'var'=> ( $var),
    ],200);



    }
}
