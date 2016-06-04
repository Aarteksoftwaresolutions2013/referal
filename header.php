<title>Sample Code</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="keywords" content="" />

<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">

<link href="css/style.css" type="text/css" rel="stylesheet" media="all">

<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>

<!-- Custom Theme files -->

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- //Custom Theme files -->



<script type="text/javascript" src="js/script.js"></script>

<script src="js/jquery.min.js"></script>

<!-- js -->

<script>

$(document).ready(function() {
	
 $('input,textarea').on('keypress',function(e){
									 var p = e.which;
								// alert(p);
									 if(p==60||p==62||p==63||p==34||p==39||p==123||p==125||p==40||p==41||p==58||p==59){
										 alert('Special charactors not allowed');
										 return false;
									 }
								 });
                                 
                                 }); 
 </script>

<script src="js/modernizr.custom.js"></script>

<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>

<!--timer-->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

        

        <script src="js/jquery.rotate.js"></script>

        

        <style>

            body { font-family: Arial, sans-serif; }

        </style>

       

<!--/timer-->

<!-- video -->	

<link href="css/jplayer.blue.monday.min.css" rel="stylesheet" type="text/css" />



<script type="text/javascript">

//<![CDATA[



//]]>
                function startasurvey(){

                  //  alert("hello");

                   $('.popup').fadeOut(10);

								$('.popup_container').fadeIn(500);

								//$('.popup2').fadeOut(500);	

								$('.step1').fadeIn(1000);

								$('#button1').click(function()

								{

									 $('.popup').fadeOut(10);

									$('.step1').fadeOut(0);

									$('.step2').fadeIn(1000);

								});
                                
                                $('#button2').click(function()

								{

									 $('.popup').fadeOut(10);

									$('.step2').fadeOut(0);

									$('.step3').fadeIn(1000);

								});

								$('#button3').click(function()

								{

									 $('.popup').fadeOut(10);

									$('.step3').fadeOut(0);

									$('.step4').fadeIn(1000);

								});
                                
                                $('#button4').click(function()

								{

									 $('.popup').fadeOut(10);

									$('.step4').fadeOut(0);

									$('.step5').fadeIn(1000);

								});

								$('#button5').click(function(){

									 $('.popup').fadeOut(10);

									$('.step5').fadeOut(0);

									$('.finish').fadeIn(1000);

								});

                                }

</script>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

<script src="js/underscore-min.js"></script>

<script src= "js/moment-2.2.1.js"></script>


<script src="js/site.js"></script>

<!-- the jScrollPane script -->

<script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>

<script type="text/javascript" src="js/jquery.mousewheel.js"></script>