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


class classcontroller extends Controller
{
//------------------------------------------------------------------------------Start
public function __construct()
    {
        $this->middleware('auth');
    }




//-----------------------------  Default Videos -------------------------------//
public function all_videos () {

return view('centre.media',compact(''));
}
//-----------------------------  Upload  -------------------------------//
public function upload_video (request $request) {
          
                if( in_array($request->video->getClientOriginalExtension(), ['mp4']) )
                {
                   $vid = 'main.'.$request->video->getClientOriginalExtension();
                   $request->video->move('upload_dir/render_videos', $vid); 
                   $note = 'Uploading Completed successfully ...'  ;
                }
                else
                {
                  $note =  ' Only MP4 is accepted ... '  ;
                } 

return response()->json([$note]); 
}
//-----------------------------  Default  -------------------------------//
public function all_classes () {

 $users = User::where('type','admin')->get();

return view('centre.class' ,compact('users'));
}
//-----------------------------  GET  -------------------------------//
public function get_classes ($id) {

    if($id=='0')
    {
      $json_class = classes::orderby('id','desc')->get();    
    }
    else
    {
      $json_class = classes::where('name','Like','%'.$id.'%')
                              ->orwhere('description','Like','%'.$id.'%')
                              ->orderby('id','desc')
                              ->get();     
    }

    $students = student::get();

    return response()->json([$json_class,$students]); 

}
//-----------------------------  Insert  -------------------------------//
public function insert_class (request $request) {

  $class=classes::create($request->all());
  $done='Add Class successfully ..';
return response()->json([$done]); 
}
//-----------------------------  Update  -------------------------------//
public function edite_class (Request $request) {

      DB::table('classes')->where('id',$request->ido)->update(['name' => $request->name,'code' => $request->code ,'status' => $request->status ,'description' => $request->description ,'maximum_students' => $request->maximum_students]);
  
      $done='Updated successfully';
return response()->json([$done]); 
}
//-----------------------------  Delete  -------------------------------//
public function delete_class ($class) {

   DB::table('classes')->where('id', $class)->delete();
      $done='Deleted successfully';
return response()->json([$done]);   
}
//------------------------------------------------------------------------------Finish


}
