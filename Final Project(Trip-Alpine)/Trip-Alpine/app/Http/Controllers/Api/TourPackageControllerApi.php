<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tourPackage;
use App\Models\User; 
use Hash;
use Session;

class TourPackageControllerApi extends Controller
{
   public function savePackage(Request $request){

        // $request->validate([
        //     'place' => 'required',
        //     'description' => 'required',
        //     'day' => 'required',
        //     'facilities' => 'required',
        //     'price' => 'required',
        //     'phone' => 'required|numeric',
        // ]);

        
        $place = $request->place;


        $description = $request->description;
        $day = $request->day;
        $facilities = $request->facilities;
        $price = $request->price;
        $phone = $request->phone;

        $pack = new tourPackage();
        $pack->user_id= $request->user_id;
        $pack->place = $place;
        $pack->description = $description;
        $pack->day = $day;
        $pack->facilities = $facilities;
        $pack->price = $price;
        $pack->phone = $phone;

        $pack->save();
       return response()->json([
                'pack'=>  $pack,
                     'message' => 'Package added succesfully into your database',
            ],200); 


    }

       public function package_list(Request $request){

        $id= $request->header("auth");  
        $data= tourPackage::where('user_id','=',$id)->get()->all();
     
      
        return response()->json([
                'data'=>  $data,
                   
            ],200); 
    }
     public function deletePackage($id){
      
        tourPackage::where('id','=', $id)->delete();
          return response()->json([
                'msg'=>  'deleted successfully',
                   
            ],200); 
    }
     public function updatePackage(Request $request,$id){
            $var = tourPackage::find($id);            
            $var->place=$request->place;
            $var->description=$request->description;
            $var->day=$request->day;
            $var->facilities=$request->facilities;
            $var->price=$request->price;
            $var->phone=$request->phone;
            $var->update();
            return response()->json([
                'message'=>  'updated successfull',
            ],200);

     }
    
           

     public function package_edit($id){
        $data= tourPackage::find( $id);
        return response()->json([
                'data'=>  $data,
                'message' => 'this is data succesfully',
            ],200);
    }

}
