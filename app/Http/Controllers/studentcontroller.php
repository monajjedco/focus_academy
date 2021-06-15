<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\classes;
use App\User;
use App\student;

use Auth;
use DB;
use Hash;
use session;


class studentcontroller extends Controller
{
//------------------------------------------------------------------------------Start
public function __construct()
    {
        $this->middleware('auth');
    }


//-----------------------------  Default  -------------------------------//
public function all_students () {

 $users = User::where('type','admin')->get();
 $classes = classes::get();

return view('centre.student' ,compact('users','classes'));
}
//-----------------------------  GET  -------------------------------//
public function get_students ($id) {

    if($id=='0')
    {
      $json_student = student::orderby('class','desc')->get();    
    }
    else
    {
      $json_student = student::where('first_name','Like','%'.$id.'%')
                              ->orwhere('last_name','Like','%'.$id.'%')
                              ->orderby('class','desc')
                              ->get();     
    }

    $classes = classes::get();

    return response()->json([$json_student,$classes]); 

}
//-----------------------------  Insert  -------------------------------//
public function insert_student (request $request) {

    $check_class_max = classes::where('id',$request->class)->value('maximum_students');
    $check_student_count = student::where('class',$request->class)->get();

if( $check_student_count->count() < $check_class_max)
{
  $student=student::create($request->all());
  $done='Add Student successfully ..';
}
else
{
  $done='!! Sorry but this class can get at Maximum : '.$check_class_max.' students';
}

return response()->json([$done]); 
}
//-----------------------------  Update  -------------------------------//
public function edite_student (Request $request) {

      DB::table('students')->where('id',$request->ido)->update(['first_name' => $request->first_name,'last_name' => $request->last_name ,'date_of_birth' => $request->date_of_birth ,'class' => $request->class]);
  
      $done='Updated successfully';
return response()->json([$done]); 
}
//-----------------------------  Delete  -------------------------------//
public function delete_student ($student) {

   DB::table('students')->where('id', $student)->delete();
      $done='Deleted successfully';
return response()->json([$done]);    
}
//------------------------------------------------------------------------------Finish


}
