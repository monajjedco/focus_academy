


$("#tar-{{$r->id}}").click(function() {

            @foreach ($account3 as $jb)
             if("{{$jb->cost_center_kind}}" == 'بدون' && "{{$jb->name}}" == $("#fir_account-{{$r->id}}").val())
{
$('#cost_center_fir-{{$r->id}}').empty()	;
$('#cost_center_fir-{{$r->id}}').append($("<option></option>").attr("value","0").text("لايوجد"));
$("#cost_center_fir-{{$r->id}}").prop( "disabled", true );
}
             else if("{{$jb->cost_center_kind}}" == 'إجباري' && "{{$jb->name}}" == $("#fir_account-{{$r->id}}").val() )
{
$('#cost_center_fir-{{$r->id}}').empty()	;
$("#cost_center_fir-{{$r->id}}").prop( "disabled", false );
@foreach ($cost_center as $cec)
  @if($cec->id == $jb->cost_center)
$('#cost_center_fir-{{$r->id}}').append($("<option></option>").attr("value","{{$cec->id}}").text("{{$cec->code}}-{{$cec->name}}"));
  @endif
@endforeach

}
             else if("{{$jb->cost_center_kind}}" == 'إختياري' && "{{$jb->name}}" == $("#fir_account-{{$r->id}}").val() )
{
$('#cost_center_fir-{{$r->id}}').empty()	;
$("#cost_center_fir-{{$r->id}}").prop( "disabled", false );
$('#cost_center_fir-{{$r->id}}').append($("<option></option>").attr("value","0").text("لايوجد"));
@foreach ($cost_center as $cec)
$('#cost_center_fir-{{$r->id}}').append($("<option></option>").attr("value","{{$cec->id}}").text("{{$cec->code}}-{{$cec->name}}"));
@endforeach
}
            @endforeach
});

$("#fir_account-{{$r->id}}").change(function() {

            @foreach ($account3 as $jb)
             if("{{$jb->cost_center_kind}}" == 'بدون' && "{{$jb->name}}" == $("#fir_account-{{$r->id}}").val())
{
$('#cost_center_fir-{{$r->id}}').empty()	;
$('#cost_center_fir-{{$r->id}}').append($("<option></option>").attr("value","0").text("لايوجد"));
$("#cost_center_fir-{{$r->id}}").prop( "disabled", true );
}
             else if("{{$jb->cost_center_kind}}" == 'إجباري' && "{{$jb->name}}" == $("#fir_account-{{$r->id}}").val() )
{
$('#cost_center_fir-{{$r->id}}').empty()	;
$("#cost_center_fir-{{$r->id}}").prop( "disabled", false );
@foreach ($cost_center as $cec)
  @if($cec->id == $jb->cost_center)
$('#cost_center_fir-{{$r->id}}').append($("<option></option>").attr("value","{{$cec->id}}").text("{{$cec->code}}-{{$cec->name}}"));
  @endif
@endforeach

}
             else if("{{$jb->cost_center_kind}}" == 'إختياري' && "{{$jb->name}}" == $("#fir_account-{{$r->id}}").val() )
{
$('#cost_center_fir-{{$r->id}}').empty()	;
$("#cost_center_fir-{{$r->id}}").prop( "disabled", false );
$('#cost_center_fir-{{$r->id}}').append($("<option></option>").attr("value","0").text("لايوجد"));
@foreach ($cost_center as $cec)
$('#cost_center_fir-{{$r->id}}').append($("<option></option>").attr("value","{{$cec->id}}").text("{{$cec->code}}-{{$cec->name}}"));
@endforeach
}
            @endforeach

});











$("#tar-{{$r->id}}").click(function() {

            @foreach ($account3 as $jb)
             if("{{$jb->cost_center_kind}}" == 'بدون' && "{{$jb->name}}" == $("#fst_account-{{$r->id}}").val())
{
$('#cost_center_sec-{{$r->id}}').empty()	;
$('#cost_center_sec-{{$r->id}}').append($("<option></option>").attr("value","0").text("لايوجد"));
$("#cost_center_sec-{{$r->id}}").prop( "disabled", true );
}
             else if("{{$jb->cost_center_kind}}" == 'إجباري' && "{{$jb->name}}" == $("#fst_account-{{$r->id}}").val() )
{
$('#cost_center_sec-{{$r->id}}').empty()	;
$("#cost_center_sec-{{$r->id}}").prop( "disabled", false );
@foreach ($cost_center as $cec)
  @if($cec->id == $jb->cost_center)
$('#cost_center_sec-{{$r->id}}').append($("<option></option>").attr("value","{{$cec->id}}").text("{{$cec->code}}-{{$cec->name}}"));
  @endif
@endforeach

}
             else if("{{$jb->cost_center_kind}}" == 'إختياري' && "{{$jb->name}}" == $("#fst_account-{{$r->id}}").val() )
{
$('#cost_center_sec-{{$r->id}}').empty()	;
$("#cost_center_sec-{{$r->id}}").prop( "disabled", false );
$('#cost_center_sec-{{$r->id}}').append($("<option></option>").attr("value","0").text("لايوجد"));
@foreach ($cost_center as $cec)
$('#cost_center_sec-{{$r->id}}').append($("<option></option>").attr("value","{{$cec->id}}").text("{{$cec->code}}-{{$cec->name}}"));
@endforeach
}
            @endforeach



});

$("#fst_account-{{$r->id}}").change(function() {

            @foreach ($account3 as $jb)
             if("{{$jb->cost_center_kind}}" == 'بدون' && "{{$jb->name}}" == $("#fst_account-{{$r->id}}").val())
{
$('#cost_center_sec-{{$r->id}}').empty()	;
$('#cost_center_sec-{{$r->id}}').append($("<option></option>").attr("value","0").text("لايوجد"));
$("#cost_center_sec-{{$r->id}}").prop( "disabled", true );
}
             else if("{{$jb->cost_center_kind}}" == 'إجباري' && "{{$jb->name}}" == $("#fst_account-{{$r->id}}").val() )
{
$('#cost_center_sec-{{$r->id}}').empty()	;
$("#cost_center_sec-{{$r->id}}").prop( "disabled", false );
@foreach ($cost_center as $cec)
  @if($cec->id == $jb->cost_center)
$('#cost_center_sec-{{$r->id}}').append($("<option></option>").attr("value","{{$cec->id}}").text("{{$cec->code}}-{{$cec->name}}"));
  @endif
@endforeach

}
             else if("{{$jb->cost_center_kind}}" == 'إختياري' && "{{$jb->name}}" == $("#fst_account-{{$r->id}}").val() )
{
$('#cost_center_sec-{{$r->id}}').empty()	;
$("#cost_center_sec-{{$r->id}}").prop( "disabled", false );
$('#cost_center_sec-{{$r->id}}').append($("<option></option>").attr("value","0").text("لايوجد"));
@foreach ($cost_center as $cec)
$('#cost_center_sec-{{$r->id}}').append($("<option></option>").attr("value","{{$cec->id}}").text("{{$cec->code}}-{{$cec->name}}"));
@endforeach
}
            @endforeach

});









$("#tar-{{$r->id}}").click(function() {


            @foreach ($account3 as $jb)
             if("{{$jb->cost_center_kind}}" == 'بدون' && "{{$jb->name}}" == $("#third_account-{{$r->id}}").val())
{
$('#cost_center_dedu-{{$r->id}}').empty()	;
$('#cost_center_dedu-{{$r->id}}').append($("<option></option>").attr("value","0").text("لايوجد"));
$("#cost_center_dedu-{{$r->id}}").prop( "disabled", true );
}
             else if("{{$jb->cost_center_kind}}" == 'إجباري' && "{{$jb->name}}" == $("#third_account-{{$r->id}}").val() )
{
$('#cost_center_dedu-{{$r->id}}').empty()	;
$("#cost_center_dedu-{{$r->id}}").prop( "disabled", false );
@foreach ($cost_center as $cec)
  @if($cec->id == $jb->cost_center)
$('#cost_center_dedu-{{$r->id}}').append($("<option></option>").attr("value","{{$cec->id}}").text("{{$cec->code}}-{{$cec->name}}"));
  @endif
@endforeach

}
             else if("{{$jb->cost_center_kind}}" == 'إختياري' && "{{$jb->name}}" == $("#third_account-{{$r->id}}").val() )
{
$('#cost_center_dedu-{{$r->id}}').empty()	;
$("#cost_center_dedu-{{$r->id}}").prop( "disabled", false );
$('#cost_center_dedu-{{$r->id}}').append($("<option></option>").attr("value","0").text("لايوجد"));
@foreach ($cost_center as $cec)
$('#cost_center_dedu-{{$r->id}}').append($("<option></option>").attr("value","{{$cec->id}}").text("{{$cec->code}}-{{$cec->name}}"));
@endforeach
}
            @endforeach

});


$("#third_account-{{$r->id}}").change(function() {

            @foreach ($account3 as $jb)
             if("{{$jb->cost_center_kind}}" == 'بدون' && "{{$jb->name}}" == $("#third_account-{{$r->id}}").val())
{
$('#cost_center_dedu-{{$r->id}}').empty()	;
$('#cost_center_dedu-{{$r->id}}').append($("<option></option>").attr("value","0").text("لايوجد"));
$("#cost_center_dedu-{{$r->id}}").prop( "disabled", true );
}
             else if("{{$jb->cost_center_kind}}" == 'إجباري' && "{{$jb->name}}" == $("#third_account-{{$r->id}}").val() )
{
$('#cost_center_dedu-{{$r->id}}').empty()	;
$("#cost_center_dedu-{{$r->id}}").prop( "disabled", false );
@foreach ($cost_center as $cec)
  @if($cec->id == $jb->cost_center)
$('#cost_center_dedu-{{$r->id}}').append($("<option></option>").attr("value","{{$cec->id}}").text("{{$cec->code}}-{{$cec->name}}"));
  @endif
@endforeach

}
             else if("{{$jb->cost_center_kind}}" == 'إختياري' && "{{$jb->name}}" == $("#third_account-{{$r->id}}").val() )
{
$('#cost_center_dedu-{{$r->id}}').empty()	;
$("#cost_center_dedu-{{$r->id}}").prop( "disabled", false );
$('#cost_center_dedu-{{$r->id}}').append($("<option></option>").attr("value","0").text("لايوجد"));
@foreach ($cost_center as $cec)
$('#cost_center_dedu-{{$r->id}}').append($("<option></option>").attr("value","{{$cec->id}}").text("{{$cec->code}}-{{$cec->name}}"));
@endforeach
}
            @endforeach

});







$("#tar-{{$r->id}}").click(function() {


            @foreach ($account3 as $jb)
             if("{{$jb->cost_center_kind}}" == 'بدون' && "{{$jb->name}}" == $("#forth_account-{{$r->id}}").val())
{
$('#cost_center_added-{{$r->id}}').empty()	;
$('#cost_center_added-{{$r->id}}').append($("<option></option>").attr("value","0").text("لايوجد"));
$("#cost_center_added-{{$r->id}}").prop( "disabled", true );
}
             else if("{{$jb->cost_center_kind}}" == 'إجباري' && "{{$jb->name}}" == $("#forth_account-{{$r->id}}").val() )
{
$('#cost_center_added-{{$r->id}}').empty()	;
$("#cost_center_added-{{$r->id}}").prop( "disabled", false );
@foreach ($cost_center as $cec)
  @if($cec->id == $jb->cost_center)
$('#cost_center_added-{{$r->id}}').append($("<option></option>").attr("value","{{$cec->id}}").text("{{$cec->code}}-{{$cec->name}}"));
  @endif
@endforeach

}
             else if("{{$jb->cost_center_kind}}" == 'إختياري' && "{{$jb->name}}" == $("#forth_account-{{$r->id}}").val() )
{
$('#cost_center_added-{{$r->id}}').empty()	;
$("#cost_center_added-{{$r->id}}").prop( "disabled", false );
$('#cost_center_added-{{$r->id}}').append($("<option></option>").attr("value","0").text("لايوجد"));
@foreach ($cost_center as $cec)
$('#cost_center_added-{{$r->id}}').append($("<option></option>").attr("value","{{$cec->id}}").text("{{$cec->code}}-{{$cec->name}}"));
@endforeach
}
            @endforeach



});

$("#forth_account-{{$r->id}}").change(function() {

            @foreach ($account3 as $jb)
             if("{{$jb->cost_center_kind}}" == 'بدون' && "{{$jb->name}}" == $("#forth_account-{{$r->id}}").val())
{
$('#cost_center_added-{{$r->id}}').empty()	;
$('#cost_center_added-{{$r->id}}').append($("<option></option>").attr("value","0").text("لايوجد"));
$("#cost_center_added-{{$r->id}}").prop( "disabled", true );
}
             else if("{{$jb->cost_center_kind}}" == 'إجباري' && "{{$jb->name}}" == $("#forth_account-{{$r->id}}").val() )
{
$('#cost_center_added-{{$r->id}}').empty()	;
$("#cost_center_added-{{$r->id}}").prop( "disabled", false );
@foreach ($cost_center as $cec)
  @if($cec->id == $jb->cost_center)
$('#cost_center_added-{{$r->id}}').append($("<option></option>").attr("value","{{$cec->id}}").text("{{$cec->code}}-{{$cec->name}}"));
  @endif
@endforeach

}
             else if("{{$jb->cost_center_kind}}" == 'إختياري' && "{{$jb->name}}" == $("#forth_account-{{$r->id}}").val() )
{
$('#cost_center_added-{{$r->id}}').empty()	;
$("#cost_center_added-{{$r->id}}").prop( "disabled", false );
$('#cost_center_added-{{$r->id}}').append($("<option></option>").attr("value","0").text("لايوجد"));
@foreach ($cost_center as $cec)
$('#cost_center_added-{{$r->id}}').append($("<option></option>").attr("value","{{$cec->id}}").text("{{$cec->code}}-{{$cec->name}}"));
@endforeach
}
            @endforeach

});



$("#tar-{{$r->id}}").click(function() {


            @foreach ($account3 as $jb)
             if("{{$jb->cost_center_kind}}" == 'بدون' && "{{$jb->name}}" == $("#fifth_account-{{$r->id}}").val())
{
$('#cost_center_tax-{{$r->id}}').empty()	;
$('#cost_center_tax-{{$r->id}}').append($("<option></option>").attr("value","0").text("لايوجد"));
$("#cost_center_tax-{{$r->id}}").prop( "disabled", true );
}
             else if("{{$jb->cost_center_kind}}" == 'إجباري' && "{{$jb->name}}" == $("#fifth_account-{{$r->id}}").val() )
{
$('#cost_center_tax-{{$r->id}}').empty()	;
$("#cost_center_tax-{{$r->id}}").prop( "disabled", false );
@foreach ($cost_center as $cec)
  @if($cec->id == $jb->cost_center)
$('#cost_center_tax-{{$r->id}}').append($("<option></option>").attr("value","{{$cec->id}}").text("{{$cec->code}}-{{$cec->name}}"));
  @endif
@endforeach

}
             else if("{{$jb->cost_center_kind}}" == 'إختياري' && "{{$jb->name}}" == $("#fifth_account-{{$r->id}}").val() )
{
$('#cost_center_tax-{{$r->id}}').empty()	;
$("#cost_center_tax-{{$r->id}}").prop( "disabled", false );
$('#cost_center_tax-{{$r->id}}').append($("<option></option>").attr("value","0").text("لايوجد"));
@foreach ($cost_center as $cec)
$('#cost_center_tax-{{$r->id}}').append($("<option></option>").attr("value","{{$cec->id}}").text("{{$cec->code}}-{{$cec->name}}"));
@endforeach
}
            @endforeach

});
$("#fifth_account-{{$r->id}}").change(function() {

            @foreach ($account3 as $jb)
             if("{{$jb->cost_center_kind}}" == 'بدون' && "{{$jb->name}}" == $("#fifth_account-{{$r->id}}").val())
{
$('#cost_center_tax-{{$r->id}}').empty()	;
$('#cost_center_tax-{{$r->id}}').append($("<option></option>").attr("value","0").text("لايوجد"));
$("#cost_center_tax-{{$r->id}}").prop( "disabled", true );
}
             else if("{{$jb->cost_center_kind}}" == 'إجباري' && "{{$jb->name}}" == $("#fifth_account-{{$r->id}}").val() )
{
$('#cost_center_tax-{{$r->id}}').empty()	;
$("#cost_center_tax-{{$r->id}}").prop( "disabled", false );
@foreach ($cost_center as $cec)
  @if($cec->id == $jb->cost_center)
$('#cost_center_tax-{{$r->id}}').append($("<option></option>").attr("value","{{$cec->id}}").text("{{$cec->code}}-{{$cec->name}}"));
  @endif
@endforeach

}
             else if("{{$jb->cost_center_kind}}" == 'إختياري' && "{{$jb->name}}" == $("#fifth_account-{{$r->id}}").val() )
{
$('#cost_center_tax-{{$r->id}}').empty()	;
$("#cost_center_tax-{{$r->id}}").prop( "disabled", false );
$('#cost_center_tax-{{$r->id}}').append($("<option></option>").attr("value","0").text("لايوجد"));
@foreach ($cost_center as $cec)
$('#cost_center_tax-{{$r->id}}').append($("<option></option>").attr("value","{{$cec->id}}").text("{{$cec->code}}-{{$cec->name}}"));
@endforeach
}
            @endforeach

});

