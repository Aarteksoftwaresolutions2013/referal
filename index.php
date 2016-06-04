<?php session_start();
include("config.php");
 ?>

<!DOCTYPE html>

<html>

<head>
<link rel="stylesheet" href	="css/animate.css">
<script src="js/jquery.js"></script>
<?php include 'header.php'; ?>                               
</head>     

<body>

<div class="popup_container" style="display:none";>

<?php include 'congratulation.php'; ?>

<?php include 'Step.php'; ?>

<?php include 'Step2.php'; ?>

<?php include 'Step3.php'; ?>

<?php include 'Step4.php'; ?>

<?php include 'Step5.php'; ?>

<?php include 'Finish.php'; ?>

<?php include 'login.php'; ?>

<?php include 'forgot_password.php'; ?>

<?php include 'signup.php'; ?>


<!-- content -->

<div class="top-header">

	 <div class="container">

		  <nav class="navbar navbar-default">

			  <div class="container-fluid">

				
                <?php include 'navigation.php'; ?>
				  

			  </div><!-- /.container-fluid -->

		 </nav>

	 </div>

</div>

<script src="js/bootstrap.js"> </script>

<!--banner-->

<div class="banner">

	 <div class="container_SELF">

	 <script src="js/responsiveslides.min.js"></script>

	 <script>

		$(function () {

		  $("#slider").responsiveSlides({

			auto: false,

			nav: true,

			speed: 500,

			namespace: "callbacks",

			pager: true,

		  });

		});

	  </script>

	 <div class="slider">

			   <div class="callbacks_container">

				  <ul class="rslides" id="slider">

					 <li>

						 <div class="banner1">

							 <div class="banner-grids">

								 <div class="banner-text">

									 <div class="tag">

										 <h4><a href="#">HEROES</a></h4>

									 </div>

									 <div class="bnr-info">

										 <h1>Flash Gordon is the hero of a science fiction Test</h1>

										 <p>First published January 7, 1934, the strip was inspired by and created to compete with the already established Buck Rogers adventure strip. Also inspired by these series were comics...</p>

										 <a href="#">Readmore</a>

									</div>

								 </div>

							 </div>

						 </div>		          

					 </li>

					 <li>	          

						<div class="banner2">

							 <div class="banner-grids2">

								 <div class="bnr2-top">

									 <h3>Green Lantern</h3>

									 <h4>Chief redactor</h4>

								 </div>

								 <div class="bnr2-text">

									 <p>Harley Quinn is a fictional character, a super villain in the DC Universe. The character was introduced on September 11, 1992</p>

								 </div>

								 <div class="dot">

									 <img src="images/dot.png" alt=""/>

								 </div>

							 </div>

						 </div>			          

					 </li>

					 <li>	          

						 <div class="banner1">

							 <div class="banner-grids">

								 <div class="banner-text">

									 <div class="tag">

										 <h4><a href="#">HEROES</a></h4>

									 </div>

									 <div class="bnr-info">

										 <h1>Flash Gordon is the hero of a science fiction Test</h1>

										 <p>First published January 7, 1934, the strip was inspired by and created to compete with the already established Buck Rogers adventure strip. Also inspired by these series were comics...</p>

										 <a href="#">Readmore</a>

									</div>

								 </div>

							 </div>

						 </div>		          

					 </li>

				  </ul>

			  </div>

	 </div>

	 <!----->

	 </div>

</div>

<!--content-->

<div class="content">

	 <div class="container">

		 <div class="clearfix"></div>

		 <div class="content-bottom">

			 <script src="js/easyResponsiveTabs.js" type="text/javascript"></script>

				<script type="text/javascript">

					$(document).ready(function () {

						$('#horizontalTab').easyResponsiveTabs({

							type: 'default', //Types: default, vertical, accordion           

							width: 'auto', //auto or any width like 600px

							fit: true   // 100% fit in a container

						});

					});

				   </script>

			 <div id="horizontalTab" style="display: block; width: 100%; margin: 0px; height: 200px;background-color:rgb(216, 216, 216);">

             <div id="inst">INSTRUCTIONS</div>

                <?php
                
                function query($value, $connect){
    
                    $logincheck=mysqli_query($connect,"SELECT * FROM referel_value WHERE key_user_id='".$value."'");
                    
                    return $logincheck;
                }
                
                function recursive($get_id, $connect){
 
                    $count=mysqli_query($connect,"SELECT * FROM referel_value WHERE key_user_id='".$get_id."'");	

                    $countTotal=mysqli_num_rows($count); 
                   
                }
                
                function whileee($u_id, $connect){
        
                    $result=query($u_id, $connect);
                    
                         while($get_name= mysqli_fetch_assoc($result))
                        {
                                   
                                   $GLOBALS['mainCount']++;
                                   
                                   //echo $get_name['refered_user_id'];
                                    recursive($get_name['refered_user_id'], $connect); 
                                  
                                   whileee($get_name['refered_user_id'], $connect);            
                        }   
                    
                }
            
              
                if(isset($_SESSION['id'])){

                $for=$_SESSION['id'];

                $mainCount=0;

                whileee($for, $connect);
                
                
                }

                if(isset($_SESSION['id']) && ($mainCount>=30)){     

                ?>

                   <script>
                   
                   
                        $('.popup_container').css("display","block"); 
                        $('.congratulationmsg').css("display","block"); 
						$('.welcomepage').css("display","none");

                    </script>
                    
                <?php

                }

                //echo $mainCount;

                

                ?>
             
				 <div class="clearfix"></div>

		  </div>	

		 </div>

	 </div>
     
     <?php include "footer.php"; ?>

	 

</div>

</body>

</html>