@extends('master')
@section('content')
<!-------------------- page-bar-------------------------->
<div class="page-bar" dir="ltr" style="font-size: 17px; margin-top: -15px;" >@include('centre.date')
	<ul class="page-breadcrumb">
		<li style="margin-top: 6px; margin-right: 10px;"><i class="icon-home"></i><a href="{{ URL::to('home') }}" style="text-decoration: none" class="font-blue hidden-xs">  Main Page</a><i class="fa fa-angle-right font-red"></i></li>
		<li class="hidden-xs"><a style="text-decoration: none">  Setting </a><i class="fa fa-angle-right font-red"></i></li>
		<li><a href="#" style="text-decoration: none"><b><span class="badge " id="total">0</span>  Students Setting </b></a></li>
	</ul>
</div> 
<!-------------------- page-bar-------------------------->
<!---------------------------------------------->
<style type="text/css">
.cscese1 {
  margin: 0 0 20px 0;
  padding: 10px 5px 10px 5px;
  border-right: 3px solid #d05454 ;
  border-left: 3px solid #d05454 ;
  }
</style>
<!---------------------------------------------->

<!-- //----------------------------DELETE------------------------------// -->
<div class='modal fade' id='del' tabindex='-1' role='basic' aria-hidden='true' dir="ltr">
	<div class='modal-dialog ' style='margin-top: 150px;'>
		<div class='row note note-danger' style='border-radius: 15px;'>
			<div class='form-title'>
				<button type='button' class='close' data-dismiss='modal' aria-hidden='true'></button>
				<h4 class='font-grey-cascade'>  Delete </h4>
			</div>
			<div class='row modal-body'>
				<center>
				  
				<h3>    Are you sure ...??  </h3>
				    <p>
				<h3 class='font-blue-madison' id='del_name'>   </h3> 				 
				</center>
				<div class='row modal-footer' style='margin-bottom: -30px;'>
					<button tabindex='0'  val='' class='btn btn-danger delete_student'><i class='fa fa-trash white'></i> Accept </button>
					<button type='button' data-dismiss='modal' class='btn btn-default'><i class='fa fa-close font-red'></i>  Cancel </button>
				</div>
			</div>						
		</div>
	</div>
</div>
<!-- //----------------------------DELETE------------------------------// -->
<script type="text/javascript">
$( document ).ready(function() {
/////////////////////////////////////////////////////////////////////////function          
 function comx(id)
 {
           $.ajax({
                 url:"{{ URL::to('get_students') }}/"+id,
                 mehtod:"get",
                 dataType:"json",
		         success: function(data)
		         {  	

		            var len = 0; 
		            var len1 = 0; 
					$("#all_student").empty();
					$('#add_student')[0].reset();
		           if(data != null)
		           {
		             len = data[0].length;
		             len2 = data[1].length;
		           }
                   $("#total").text(len);
		           if(len > 0)
		           {
	                 var total_pos = 0;
		             for(var i=0; i<len; i++)
{
		                var id = data[0][i].id;
		                var first_name = data[0][i].first_name;
		                var last_name = data[0][i].last_name;
		                var date_of_birth = data[0][i].date_of_birth; 	
                        var e_class       = data[0][i].class;

						var ps='-';
						for(var j=0; j<len2; j++)
						{
							if( e_class == data[1][j].id)
							{
								   ps= data[1][j].name; break; 	
							}
						}		               	
var tr_str = 
//----------------------------ADD------------------------------//
"<li class='  cscese1 ' style='font-size:17px; zoom: 1.2'>"+
"<span class='font-blue-madison bold  uppercase hint--bottom pull-left' aria-label=' "+date_of_birth+"' style='cursor: pointer;'>&nbsp; "+first_name+" "+last_name+" </span>  <span class='font-yellow bold uppercase1 pull-left'>&nbsp;   "+ps+" | </span>";
 

tr_str +="<span class='btn btn-default  btn-xs hint--bottom del' a1='"+id+"' a2='"+first_name+"' style='margin-right: 5px;' aria-label='Delete'><i class='fa fa-trash-o font-red'></i></span>";	



tr_str +="<span class='btn btn-default  btn-xs hint--bottom ed' aria-label='Edite' a1='"+id+"' a2='"+first_name+"' a3='"+last_name+"' a4='"+date_of_birth+"' a5='"+e_class+"' ><i class='fa fa-pencil-square-o font-blue'></i></span>";	

tr_str +=
"		</li>"+

$("#all_student").append(tr_str);
}
		           }
		           else
		           {
var tr_str = "<center><h3 class='note note-danger'> No Data  <h3></center>";
$("#all_student").append(tr_str);
		           }

         }
         });
 }
///////////////////////////////////////////////////////////////////function
//////////////////////////////////////////////////////////add	
$(document).on('submit','.add_student',function(event){ 
        event.preventDefault();
        var request= $("#id").val();
if(request=='0')
{        
        $.ajax({
            url:"{{ URL::to('insert_student') }}",
            method:"POST",
            data:new FormData(this),
            dataType:"json",
            contentType: false,
            cashe: false,
            processData: false,
            success:function(data)
            {
	           setTimeout(function() { comx('0'); }, 500);
	           alert(data[0]);
            }
        });
}
else
{
        $.ajax({
            url:"{{ URL::to('edite_student') }}",
            method:"POST",
            data:new FormData(this),
            dataType:"json",
            contentType: false,
            cashe: false,
            processData: false,
            success:function(data)
            {
	           setTimeout(function() { comx('0'); }, 500);
	           alert(data[0]);
            }
        });
}        
    });	
////////////////////////////////////////////////////////delete
     $(document).on('click', '.delete_student', function(){
        var dom = $(this).attr('val');
            $.ajax({
                url:"{{ URL::to('delete_student') }}/"+dom,                
                mehtod:"get",
                dataType:"json",
                success:function(data)
                {
		           $('#del').modal('hide');  
		           setTimeout(function() { comx('0'); }, 500);
		           setTimeout(function() { alert(data[0]);  }, 2000);                		                           
                }
	            });
	    }); 

//-------------------------------------------------------- Edite
$(document).on('click', '.ed', function(){

		        var dom1  = $(this).attr('a1');     
		        var dom2  = $(this).attr('a2'); 
		        var dom3  = $(this).attr('a3');   
		        var dom4  = $(this).attr('a4');     
		        var dom5  = $(this).attr('a5'); 
	
			setTimeout(function() {  

				$("#id").val( dom1 );    
				$("#first_name").val( dom2 ); 
				$("#last_name").val( dom3 );
				$("#date_of_birth").val( dom4 );
				$("#class").val( dom5 ).change();

			}, 500);          				
}); 
//-------------------------------------------------------- del
$(document).on('click', '.del', function(){

		        var dom1  = $(this).attr('a1');     
		        var dom2  = $(this).attr('a2'); 

			setTimeout(function() {  

				$(".delete_student").attr( 'val',dom1 );    
				$("#del_name").text( dom2 ); 
				$('#del').modal('toggle');
				$(".delete_student").focus();    

			}, 500);          				
}); 	     
///////////////////////////////////////////////////////////////////////////////////////////
$('#search_student').on('keypress',function(e) {
    if(e.which == 13)
    { 
      var a=$('#search_student').val();  
      comx(a);    
    }
});    
////////////////////////////////////////////////////////click
$(document).on('click', '.empty', function(){
        $('#add_student')[0].reset();	
});
///////////////////////////////////////////////////////////////////////////////////////////
$('#all_students').on('click',function() {
      comx('0');    
});    
////////////////////////////////////////////////////////click	    
comx('0');
});
</script>


<!------------------- Section  -------------------------->
<div class="row" dir="">
	<div class="col-md-12">
		<div class="portlet light todo-tasklist-item-border-red">
			<!-- ==================== -->
			<div class="portlet-title" >

				<div class="actions1 pull-left">
					<h4 class="font-blue-madison bold uppercase">  Add New Student   </h4> 
				</div>

				<div class="caption" dir="ltr"> 
				  
					<div class="portlet-input input-inline input-small">
						<div class="input-icon right"><i class="icon-magnifier"></i>
  							<input type="text" class="form-control form-control-solid" placeholder="Search ..." id="search_class"  >
 						</div> 
					</div>&nbsp;
						<a href="#" id="all_classes" class="hint--bottom btn btn-warning spec" aria-label="View all">View All</a>
					<a class="btn btn-circle btn-icon-only btn-default fullscreen pulse2  hidden-xs" href="#">E</a>
   				</div>

			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="col-md-4">
						<form   method="POST" class="form-horizontal add_student" id="add_student" enctype="multipart/form-data" autocomplete="off">{{ csrf_field() }} 

<input type="hidden0" name="ido" id="id" value="0" style="display:none;">

							<div class="row">

							<div class="col-md-12 col-sm-12 col-xs-12 eseitinput"> 
								<label class="col-md-12 col-sm-2 col-xs-12 font-green-haze1 bold uppercase esetop" dir="ltr"> First Name <span class="font-red">*</span></label>
								<div class="col-md-12 col-sm-4 col-xs-12 eseitinput">  
									<input type="text" class="form-control" id="first_name" name="first_name" dir="ltr" placeholder="Type First Name.." required>
 								</div>	
                            </div>

							<div class="col-md-12 col-sm-12 col-xs-12 eseitinput"> 
								<label class="col-md-12 col-sm-2 col-xs-12 font-green-haze1 bold uppercase esetop" dir="ltr"> Last Name <span class="font-red">*</span></label>
								<div class="col-md-12 col-sm-4 col-xs-12 eseitinput">  
									<input type="text" class="form-control" id="last_name" name="last_name" dir="ltr" placeholder="Type Last Name.." required>
 								</div>	
                            </div>


							<div class="col-md-12 col-sm-12 col-xs-12 eseitinput"> 
								<label class="col-md-12 col-sm-2 col-xs-12 font-green-haze1 bold uppercase esetop" dir="ltr"> Date Of Birth <span class="font-red">*</span></label>
								<div class="col-md-12 col-sm-4 col-xs-12 eseitinput">  
									<input type="text" class="form-control date" name="date_of_birth" id="date_of_birth" dir="ltr" value="{{date('Y-m-d')}}" readonly onkeypress='validate(event)'>
 								</div>	
                            </div>

								<script>
									$(function() {
									$('.date').calendarsPicker({
									showOnFocus: true,
									dateFormat: 'YYYY-mm-dd',
									yearRange: '1900:2100',
									});
									});
								</script>                            



							<div class="col-md-12 col-sm-12 col-xs-12 eseitinput"> 
								<label class="col-md-12 col-sm-2 col-xs-12 font-green-haze1 bold uppercase esetop" dir="ltr"> Class <span class="font-red">*</span></label>
								<div class="col-md-12 col-sm-4 col-xs-12 eseitinput">  
									<select class="form-control select2_category input-sm" id="status" name="class" id="class" required dir="ltr">
                                       @foreach ($classes as $r)
										<option value="{{$r->id}}"> {{$r->name}} </option>
                                       @endforeach
									</select>
								</div> 
                            </div>


							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 eseitinput" dir="ltr"><br>
								<div class="col-md-12 col-sm-4 col-xs-12 eseitinput">
									 <button type="submit" class="pull-right btn blue btn-sm" id="sub" >  Save </button> 

									 <a class="btn yellow   empty pull-left spec">   Add New / Reset </a> 
								</div>
							</div>

							</div>
						</form>					
					</div>	
					<div class="col-md-8" style="margin-top: -10px;">
						<div class="row">
							<div class="portlet-body form">
								<div class="eseitinput">
									<!---------------- Review --------------> 
									<div class="col-md-12" >
										<div class="portlet-body">
											<div class="scroller" style="height: 430px;" data-always-visible="1" data-rail-visible="0" >
												<!--------  UL ID  ------------>
 												<ul class="feeds" id="all_student">
													<!------  ---- START Ajax ----- ----->
													 
													<!------  ---- START Ajax ----- ----->
												</ul>
 												<!--------  UL ID  ------------>
											</div>
										</div>
									</div>
									<!---------------- / Review --------------> 
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!------------------- // Section  -------------------------->



 <script type="text/javascript">
$("#sub").click(function() {
   setTimeout(function() { $("#sub").prop( "disabled", true ); }, 10);
   setTimeout(function() { $("#sub").prop( "disabled", false ); }, 4000);
});	


						setTimeout(function() { 

								$( "input" ).css("height" ,"40px");	
								$( ".eseitinput" ).css("margin-bottom" ,"5px");	
								$( ".page-breadcrumb" ).css("font-size" ,"15px");	

								$( "button" ).css("height" ,"40px");	
								$( "button" ).css("border-radius" ,"900px");	
								$( "button" ).css("font-size" ,"16px");
								$( "button" ).css("padding-right" ,"22px");
								$( "button" ).css("padding-left" ,"22px");

								$( ".spec" ).css("height" ,"40px");	
								$( ".spec" ).css("border-radius" ,"900px");	
								$( ".spec" ).css("font-size" ,"16px");
								$( ".spec" ).css("padding-right" ,"22px");
								$( ".spec" ).css("padding-left" ,"22px");								
							
						}, 500); 	
</script>





<script type="text/javascript">
function round(value, decimals) {   return Number(Math.round(value + 'e' + decimals) + 'e-' + decimals);  }         

function validate(evt) {
  var theEvent = evt || window.event;

  // Handle paste
  if (theEvent.type === 'paste') {
      key = event.clipboardData.getData('text/plain');
  } else {
  // Handle key press
      var key = theEvent.keyCode || theEvent.which;
      key = String.fromCharCode(key);  
  }
  var regex = /^[0-9]*\.?[0-9]*$/;
  if( theEvent.which != 13) {
  if( !regex.test(key)  ) {
    theEvent.returnValue = false;
    if(theEvent.preventDefault) theEvent.preventDefault();
  }
                            }
} 
</script>
@stop