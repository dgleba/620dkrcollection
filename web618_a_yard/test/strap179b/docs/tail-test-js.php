
<!-- this file, tail.php is called from foot.php -->


<!-- jQuery Version 1.11.1 -->
<script src="assets/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="assets/js/bootstrap.min.js"></script>

<!-- put custom js here -->

<!-- http://www.w3schools.com/jquery/tryit.asp?filename=tryjquery_focus_blur
 -->

<script>
$(document).ready(function(){
    $(".list-group-item").hover(function(){
        //as a test.. this will make all class list-group-item red...
        //$(this).css("background-color", "red");
    });
});
</script>

<script>
$(document).ready(function(){
    $("#testred").hover(function(){
        //this will make id="testred" red on hover
        $(this).css("background-color", "red");
        $(this).css("color", "yellow");
    },
    function(){
         $(this).css("background-color", "#ffffff");
    }); 
});
</script>

	<script>
		var shiftWindow = function() { 
     		scrollBy(0, -70); 
			<!-- this hides the menu after click on a touch device -->
    		if ($('#desktopTest').is(':hidden')) 
			{
				$("#nav-main").collapse('hide');
			}
		};
		if (location.hash) shiftWindow();
		window.addEventListener("hashchange", shiftWindow);
	</script>

    
<script>
$(document).onscroll = function() {
    if( $(window).scrollTop() > $('header').height() ) {
        $('nav > div.navbar').removeClass('navbar-static-top').addClass('navbar-fixed-top');
    }
    else {
        $('nav > div.navbar').removeClass('navbar-fixed-top').addClass('navbar-static-top');
    }
};
</script>


</body>

</html>
