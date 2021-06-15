function round(value, decimals) { 	return Number(Math.round(value + 'e' + decimals) + 'e-' + decimals);  }					
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
 