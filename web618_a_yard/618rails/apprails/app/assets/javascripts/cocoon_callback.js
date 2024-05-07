//#app/assets/javascripts/....js
$(function() {

  // if this IS in a cocoon nested form..  
  // show it using cocoon:after-insert --  using callback..
  $('#questions')
    .on('cocoon:after-insert', function() {
      $(".dgselect2").select2({
    });
  });
   
});
        