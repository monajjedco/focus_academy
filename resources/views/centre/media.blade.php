@extends('master')
@section('content')
<!-------------------- page-bar-------------------------->
<div class="page-bar" dir="ltr" style="font-size: 17px; margin-top: -15px;" >@include('centre.date')
	<ul class="page-breadcrumb">
		<li style="margin-top: 6px; margin-right: 10px;"><i class="icon-home"></i><a href="{{ URL::to('home') }}" style="text-decoration: none" class="font-blue hidden-xs">  Main Page</a><i class="fa fa-angle-right font-red"></i></li>
		<li class="hidden-xs"><a style="text-decoration: none">  Setting </a><i class="fa fa-angle-right font-red"></i></li>
		<li><a href="#" style="text-decoration: none"><b><span class="badge " id="total">0</span>  Videos Render </b></a></li>
	</ul>
</div> 
<!-------------------- page-bar-------------------------->

<script type="text/javascript">
$( document ).ready(function() {
//////////////////////////////////////////////////////////add	
$(document).on('submit','.add_vid',function(event){ 
        event.preventDefault();
	        $('.progress-bar').width('0%');
	        $(".progress").css("display","block") ;	
            $("#sub").prop( "disabled", true );
		        $.ajax({
//-----------------------------------------------------------------
						xhr: function() {
						var xhr = new window.XMLHttpRequest();

						xhr.upload.addEventListener("progress", function(evt) {
						  if (evt.lengthComputable) {
						    var percentComplete = evt.loaded / evt.total;
						    percentComplete = parseInt(percentComplete * 100);

						    $('.progress-bar').width(percentComplete+'%');
						    $('.progress-bar').html(percentComplete+'%');

						  }
						}, false);

						return xhr;
						},
//------------------------------------------------------------------
		            url:"{{ URL::to('upload_video') }}",
		            method:"POST",
		            data:new FormData(this),
		            dataType:"json",
		            contentType: false,
		            cashe: false,
		            processData: false,
		            success:function(data)
		            {
			           alert(data[0]);	
                       $(".progress").css("display","none") ;			               
                       $("#sub").prop( "disabled", false )	;
                       $('.add_vid')[0].reset();                       
						//----------------------------------------------------	
                 $("#html-player").attr('src' , "{{ asset('upload_dir/render_videos/main.mp4?HD') }}");
              //	setTimeout(function() { default_play();	            }, 1500);              
				setTimeout(function() { $("#html-player").play();	}, 2500);              
						//-----------------------------------------------------
		            }
		        });
});	
//////////////////////////////////////////////////////////add	
function default_play(){

		if( $('#speed').val() >=4.5 ) 
		{ 	
			$('#player').videre({

					video: {
							quality: 
							[
								{
									label: '720p',
									src: "{{ asset('upload_dir/render_videos/main.mp4?HD') }}"
								},
								{
									label: '360p',
									src: "{{ asset('upload_dir/render_videos/main.mp4?SD') }}"
								},
								{
									label: '240p',
									src: "{{ asset('upload_dir/render_videos/main.mp4?SD') }}"
								}																
							],
							title: 'Focus Media '
					},
					dimensions: 768
			});
		}	
		else if( $('#speed').val() >=1.5 && $('#speed').val() < 4.5 )
		{
			$('#player').videre({

					video: {
							quality: 
							[
								{
									label: '360p',
									src: "{{ asset('upload_dir/render_videos/main.mp4?SD') }}"
								},							
								{
									label: '720p',
									src: "{{ asset('upload_dir/render_videos/main.mp4?HD') }}"
								},
								{
									label: '240p',
									src: "{{ asset('upload_dir/render_videos/main.mp4?SD') }}"
								}	
							],
							title: 'Focus Media '
					},
					dimensions: 768
			});
		} 	
		else if( $('#speed').val() < 1.5 )
		{
			$('#player').videre({

					video: {
							quality: 
							[
								{
									label: '240p',
									src: "{{ asset('upload_dir/render_videos/main.mp4?SD') }}"
								},							
								{
									label: '360p',
									src: "{{ asset('upload_dir/render_videos/main.mp4?SD') }}"
								},							
								{
									label: '720p',
									src: "{{ asset('upload_dir/render_videos/main.mp4?HD') }}"
								}
							],
							title: 'Focus Media '
					},
					dimensions: 768
			});	
		} 

}
///////////////////////////////////////////////////////////	
$(document).on('change', '#speed', function(){

default_play(); 
});  

});
</script>

<!------------------- Section  -------------------------->
<div class="row" dir="">
	<div class="col-md-12">
		<div class="portlet light todo-tasklist-item-border-red">
			<!-- ==================== -->


<!--------------------- PROGress -------------------->
<div class="progress" style="display:none;">
<div class="progress-bar progress-bar-success progress-bar-striped 
active" role="progressbar"
aria-valuemin="0" aria-valuemax="100" style="width:0%">
0%
</div>
</div>
<!--------------------- PROGress -------------------->	

			<div class="portlet-title" >
				<div class="actions1 pull-left">
					<h4 class="font-blue-madison bold uppercase1">  Upload And Render Video   </h4> 
				</div>
				<div class="caption" dir="ltr"> 
   				</div>

			</div>
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<div class="col-md-4">
						<form   method="POST" class="form-horizontal add_vid" id="add_vid" enctype="multipart/form-data" autocomplete="off">{{ csrf_field() }} 


							<div class="row">

							<div class="col-md-12 col-sm-12 col-xs-12 eseitinput"> 
								<label class="col-md-12 col-sm-2 col-xs-12 font-green-haze1 bold uppercase esetop" dir="ltr"> Select Video <span class="font-red">*</span></label>
								<div class="col-md-12 col-sm-4 col-xs-12 eseitinput">  
									<input type="file" class="form-control"  name="video" dir="ltr"  required>
 								</div>	
                            </div>

							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 eseitinput" dir="ltr"><br>
								<div class="col-md-12 col-sm-4 col-xs-12 eseitinput">
									 <button type="submit" class="pull-right btn blue btn-sm" id="sub" >  Upload Video </button> 
								</div>
							</div>


<input type="hidden" id="speed">
<h2 id="progress" dir="ltr"></h2>
<br>
<br>
<h3 dir="ltr">Some default Render Settings : </h3>
<br>
							<div class="col-md-12 col-sm-12 col-xs-12 eseitinput"> 
								<label class="col-md-12 col-sm-2 col-xs-12 font-green-haze1 bold uppercase1 esetop" dir="ltr" style="font-size: 20px;"> 720 HD  : <span class="font-red">More than 4.5 Mbps </span></label>	
                            </div>
							<div class="col-md-12 col-sm-12 col-xs-12 eseitinput"> 
								<label class="col-md-12 col-sm-2 col-xs-12 font-green-haze1 bold uppercase1 esetop" dir="ltr" style="font-size: 20px;"> 360 SD  : <span class="font-red">Between 1.5 To 4.5 Mbps </span></label>	
                            </div>
							<div class="col-md-12 col-sm-12 col-xs-12 eseitinput"> 
								<label class="col-md-12 col-sm-2 col-xs-12 font-green-haze1 bold uppercase1 esetop" dir="ltr" style="font-size: 20px;"> 240 SD  : <span class="font-red">Less than 1.5 Mbps </span></label>	
                            </div>




<script type="text/javascript">
//var imageAddr = "https://wallpaperaccess.com/full/1209562.jpg"; 
var imageAddr = "https://img.wallpapersafari.com/desktop/1680/1050/88/15/HYUtdS.jpg"; 
var downloadSize = 4995374; //bytes

function ShowProgressMessage(msg) {
    if (console) {
        if (typeof msg == "string") {
            console.log(msg);
        } else {
            for (var i = 0; i < msg.length; i++) {
                console.log(msg[i]);
            }
        }
    }
    
    var oProgress = document.getElementById("progress");
    if (oProgress) {
        var actualHTML = (typeof msg == "string") ? msg : msg.join("<br />");
        oProgress.innerHTML = actualHTML;
    }
}

function InitiateSpeedDetection() {
    ShowProgressMessage("Loading , please wait...");
    window.setTimeout(MeasureConnectionSpeed, 1);
};    

if (window.addEventListener) {
    window.addEventListener('load', InitiateSpeedDetection, false);
} else if (window.attachEvent) {
    window.attachEvent('onload', InitiateSpeedDetection);
}

function MeasureConnectionSpeed() {
    var startTime, endTime;
    var download = new Image();
    download.onload = function () {
        endTime = (new Date()).getTime();
        showResults();
    }
    
    download.onerror = function (err, msg) {
        ShowProgressMessage("Invalid or error downloading");
    }
    
    startTime = (new Date()).getTime();
    var cacheBuster = "?nnn=" + startTime;
    download.src = imageAddr + cacheBuster;
    
    function showResults() {
        var duration = (endTime - startTime) / 1000;
        var bitsLoaded = downloadSize * 8;
        var speedBps = (bitsLoaded / duration).toFixed(2);
        var speedKbps = (speedBps / 1024).toFixed(2);
        var speedMbps = (speedKbps / 1024).toFixed(2);
        ShowProgressMessage([
            "Your connection speed is:", 
          //  speedBps + " bps", 
          //  speedKbps + " kbps", 
            speedMbps + " Mbps",
        ]);
        $("#speed").val(speedMbps).change();
    }
}	
</script>






							</div>
						</form>					
					</div>	
					<div class="col-md-8 col-sm-12" style="margin-top: -10px;">
						<div class="row">
							<div class="portlet-body form">
								<div class="eseitinput">
									<!---------------- Review --------------> 
									<div class="col-md-12 col-sm-12" >
										<div class="portlet-body">
											<div class="scroller" style="height: 430px;" data-always-visible="1" data-rail-visible="0" >
												<!--------  UL ID  ------------>
 												<ul class="feeds" id="video">
													<!------  ---- START Ajax ----- ----->
													 
<!-- ------------------------------------------------------------------------ -->
<link href="{{ asset('csss/videre.css') }}" rel="stylesheet">
<link href="{{ asset('csss/app.css') }}" rel="stylesheet">
    
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/fonts/ionicons.eot">
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">

<script src="{{ asset('jss/videre.js') }}"></script>
<script src="{{ asset('jss/appppp.js') }}"></script>
<div class="col-md-12 col-sm-12" id="player" ></div>
<!-- ------------------------------------------------------------------------ -->
				<div id="load" style="display: none1;" class="loading-ese">
					<i class="fa fa-refresh fa-spin" style="zoom: 4; margin: 45px 87px ;"></i>
				</div>


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

						setTimeout(function() { 

								$( "input" ).css("height" ,"40px");	
								$( ".eseitinput" ).css("margin-bottom" ,"5px");	
								$( ".page-breadcrumb" ).css("font-size" ,"15px");	

								$( "button" ).css("height" ,"40px");	
								//$( "button" ).css("border-radius" ,"900px");	
								$( "button" ).css("font-size" ,"16px");
								$( "button" ).css("padding-right" ,"22px");
								$( "button" ).css("padding-left" ,"22px");



						}, 500); 	
</script>
@stop