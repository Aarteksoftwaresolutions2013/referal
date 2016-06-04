<?php session_start();
if(!isset($_SESSION['id'])){
    header('location:index.php');
}

		

include "config.php";
 ?>

<!DOCTYPE html>

<html>

<head>

<?php include 'header.php'; ?>
                           
</head>

<body onLoad="showScore(<?php echo $_SESSION['id']; ?>)">


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

			   <div class="callbacks_container">

				 <div id="referContainer"></div>

			  </div>

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
                   
                   
             <div id="horizontalTab" style="display: block; width: 100%; margin: 0px; height:280px;padding: 18px 0px 0px 0px;background-color: #E6E6E6;">

             <div id="inst">Your Total Referal</div>

				 <div class="clearfix"></div>
                 
                 <div class="refUrl" style="padding-left:0;">
                 
                 <div id="scoreContainer" style="text-align: center;">
                 
                 
                 
                 </div>
                 
                 </div>

		  </div>      
                   
                   

			 <div id="horizontalTab" style="display: block; width: 100%; margin: 0px; height:350px;padding: 18px 0px 0px 0px;background-color: #E6E6E6;">

             <div id="inst">Your Referel URL</div>

				 <div class="clearfix"></div>
                 
                 <div class="refUrl" >
                 
                 <div>
                 
                 <?php
                 
                 $q="select * from refer_url where user_id=".$_SESSION['id']."";
                 
                 $a=mysqli_query($connect,$q);
                 
                 while($get_name= mysqli_fetch_assoc($a)){
                     
                        $key=$get_name['key'];
                        
                        echo "<a href='http://".$_SERVER['HTTP_HOST'].'/refer.php?key='.$key."' target='_blank'>".$_SERVER['HTTP_HOST'].'/refer.php?key='.$key."</a>";
                        
                        }	
                 
                 
                 ?>
                 
                 </div>
                 
                 </div>

		  </div>

          

		 </div>

	 </div>

	<?php include "footer.php"; ?>

</div>

</body>

</html>