<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\User;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/





Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



//////////////////  API  ///////////////////////////Event
Route::post('/auth', function (Request $request) {

    $user = User::where('email', $request->email)->first();
    if ($user) {
        if (Hash::check($request->password, $user->password)) 
        {
            $token = $user->createToken('Laravel Password Grant Client')->accessToken;
            $response = ['token' => $token];
            $user_info = User::where('id', $user->id)->select('name','email')->get();
            DB::table('users')->where('id',$user->id)->update(['api_token' => $token]);
    
            $has_error="No Errors";
            return response([$response,$user_info,$has_error]);
        }
        else
        {
         $has_error="Errors";
         return response([$has_error]);   
        }
    }
    else
    {
    $has_error="Errors";
    return response([$has_error]);   
    }
});
//////////////////  API ////////////explore_questions as customer or support team
// and filter questions depend on question status
Route::post('/explore_questions', function (Request $request) {

    $token= $request->token ;
    $question_type= $request->question_type ;
    $user = User::where('api_token', $token)->first();
    if ($user) 
    {
	    if ($user->type=='customer') 
	    {    	
        	if($question_type)
        	{
	         $all_questions= DB::table('questions')->where('question_status',$question_type)
	                                               ->where('customer_id',$user)
	                                               ->orderby('id','desc')
	                                               ->get() ;         		
        	}
       	    else
       	    {
	         $all_questions= DB::table('questions')->where('customer_id',$user)
	                                               ->orderby('id','desc')
	                                               ->get() ;         	    	
       	    }         
        }
        else
        {
        	if($question_type)
        	{
	         $all_questions= DB::table('questions')->where('question_status',$question_type)
	                                               ->orderby('id','desc')
	                                               ->get() ;         		
        	}
       	    else
       	    {
	         $all_questions= DB::table('questions')
	                                               ->orderby('id','desc')
	                                               ->get() ;         	    	
       	    }
        }
    $has_error="No Errors";
    return response()->json([$all_questions,$has_error]);
    }
    else
    {
    $has_error="Errors";
    return response()->json($has_error);
    }

});
//////////////////  API  ///////////////////////////search_question by customer name
Route::post('/search_question', function (Request $request) {

    $token= $request->token ;
    $search_text= $request->search_text ;

    $customer = User::where('name','Like','%'.$search_text.'%')->select('id')->get();
    $user = User::where('api_token', $token)->first();
    if ($user) 
    {
	    if ($user->type=='customer') 
	    {   
         $all_questions= DB::table('questions')->where('customer_id',$user)
	                                               ->wherein('customer_id',$customer)
	                                               ->orderby('id','desc')
	                                               ->get() ; 
	    }
	    else
	    {
         $all_questions= DB::table('questions')
                         ->wherein('customer_id',$customer)
	                                               ->orderby('id','desc')
	                                               ->get() ; 
	    }        	    	      
    $has_error="No Errors";
    return response()->json([$all_questions,$has_error]);
    }
    else
    {
    $has_error="Errors";
    return response()->json($has_error);
    }

});
//////////////////  API  //////////////Make question status "Answered" OR "SPAM"
Route::post('/change_question_status', function (Request $request) {

    $token= $request->token ;
    $new_status= $request->new_status ;

    $user = User::where('api_token', $token)->first();
    if ($user) 
    {

      DB::table('questions')->where('id',$request->question_id)
                            ->update(['question_status' => $new_status]);

	      
    $has_error="No Errors";
    return response()->json([$has_error]);
    }
    else
    {
    $has_error="Errors";
    return response()->json($has_error);
    }

});