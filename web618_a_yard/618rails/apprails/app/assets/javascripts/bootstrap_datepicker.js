
//#app/assets/javascripts/datepicker.js

// dgleba js misc...


/*global $*/

$(function() {

  $(document).ready(function(){
    $('.bootstrapdatepicker').datepicker(
      {
        daysOfWeekDisabled: "0,6",
        calendarWeeks: true,
        autoclose: true,
        todayHighlight: true,
        todayBtn: true,
        clearBtn: true
   
      }
    );
  });
  
});


