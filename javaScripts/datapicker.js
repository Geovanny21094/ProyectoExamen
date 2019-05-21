//$(function(){
	
jQuery(function(){
	$( "#dateButton" ).datepicker({


		onSelect: function(date) {
	
			var fec = document.getElementById('fechaAbono');
		
            fec.value = date;
            //selectedDate = date;
        }
	});


   
});


//$( "#dateButton" ).datepicker({
//	currentText: "Now",
//	dateFormat: "dd-mm-yy",
//	appendText: "(dd-mm-yyyy)"
//});

//$("#radio").button();
//});



     // var fec = document.getElementById('fechaAbono');  