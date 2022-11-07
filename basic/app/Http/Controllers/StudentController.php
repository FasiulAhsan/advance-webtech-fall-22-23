<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
  public function studentCreate(){
    return view('pages.student.studentCreate');
  }

  public function studentCreatesubmitted(Request $request){
    $validate = $request->validate([
      'name'=>'required',
      'id'=>'required',
      'dob'=>'required',
      'email'=>'required',
      'phone'=>'required'

    ],
    [
      'name.required' => 'Please Put your name',
      'name.min'=> 'name must be greater than 5 character'

    ]
  );
    $student = new Student();
    $student->name= $request->name;
    $student->student_id= $request->id;
    $student->email= $request->email;
    $student->save();
    
    return $student;

    //return "ok";
  }




  public function list(){

    $students = student::all();
    //$student =array();

    //for($i=0; $i<10; $i++){
     // $student = array(
     //   "name"=>"student".($i+1),
      //  "id"=>"00".($i+1),
      //  "dob"=>"11-11-11"

      //  );
      //  $students[]=(object)$student;

      //  }

       return view('pages.student.list')->with('students',$students);
      //return $student;
    }

    public function studentEdit(){
      $student = student::whrer('id',$request->id)->first();

      return $student;
    }




}
