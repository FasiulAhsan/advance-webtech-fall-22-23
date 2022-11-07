<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tourPackage;

class tourPackageController extends Controller
{
    public function tourPackage(){
        //$data = tour_packages::get();
       // return view ('tourPackagelist', compact('data'));
       return view('tourPackagelist');
    }
}
