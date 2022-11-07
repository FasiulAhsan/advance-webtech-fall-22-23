<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tourPackage;

class tourPackageController extends Controller
{
    public function index(){
        $data= tourPackage::get();
       // return $data;
       return view('package-list', compact('data'));
    }

    public function addPackage(){
        return view ('add-package');
    }

    public function savePackage(Request $request){

        $request->validate([
            'place' => 'required',
            'description' => 'required',
            'day' => 'required',
            'facilities' => 'required',
            'price' => 'required',
            'phone' => 'required|numeric',
        ]);

        
        $place = $request->place;
        $description = $request->description;
        $day = $request->day;
        $facilities = $request->facilities;
        $price = $request->price;
        $phone = $request->phone;

        $pack = new tourPackage();
        $pack->place = $place;
        $pack->description = $description;
        $pack->day = $day;
        $pack->facilities = $facilities;
        $pack->price = $price;
        $pack->phone = $phone;

        $pack->save();

        return redirect ()->back()->with('success', 'Tour Package Added Successfully');

    }

    public function editPackage($id){
        $data= tourPackage::where('id', '=', $id)->first();
         return view('edit-package',compact('data'));
    }

    public function updatePackage(Request $request){
        $request->validate([
            'place' => 'required',
            'description' => 'required',
            'day' => 'required',
            'facilities' => 'required',
            'price' => 'required',
            'phone' => 'required|numeric',
        ]);

        $id = $request->id;
        $place = $request->place;
        $description = $request->description;
        $day = $request->day;
        $facilities = $request->facilities;
        $price = $request->price;
        $phone = $request->phone;

        tourPackage::where('id','=', $id)->update([
            'place' => $place,
            'description' => $description,
            'day' => $day,
            'facilities' => $facilities,
            'price' => $price,
            'phone' => $phone,
        ]);
        return redirect ()->back()->with('success', 'Tour Package Updated Successfully');

    }

    public function deletePackage($id){
        tourPackage::where('id','=', $id)->delete();
        return redirect ()->back()->with('success', 'Tour Package Delete Successfully');
    }
}
