<head>
<link rel="stylesheet" src="css/animate.css">
<script src="js/jquery.js"></script>
</head>

<div class="popup welcomepage" >

<?php

 if(isset($_GET['signinerror'])){

?>
 <div id="close1"><a href="index.php"><img src="images/close.png" width="30px"></a></div>

<?php
 
 }else{
 ?>
<div id="close1"><img onClick="popup_hide()" src="images/close.png" width="30px"></div>

 <?php
 }

 ?>



<div  class="top_head">

<h3 style="font-weight: bold;padding-top: 7px;">Login</h3>
</div>

<form id="form" action="welcm_validate.php" class="form-horizontal" method="post" style="margin: 25px auto;text-align: center;">


<?php

 if(isset($_GET['key'])){

?>
<input type="hidden" value="<?php echo $_GET['key']; ?>" name="key"></input>

<?php

 }

?>


<?php

 if(isset($_GET['msg'])){

?>
<span class="color" style="font-size: 14px;font-weight: 600;color: #148CC7 !important;">Your Account is created<br>To get Referel link login to your account</span><br>
<?php

 }

?>

<div class="form-group">
<span class="color" style="margin-right: 15px;"><?php if(isset($_GET['signinerror'])){ echo $_GET['signinerror'];} ?></span><br>
<label class="control-label " style="margin: 0px 0px 0px 90px;float: left;">E-mail: &nbsp &nbsp &nbsp </label> 

<input class="textfield" id="email" type="text" style="margin: 0px 0px 0px 15px !important;float: left;" name="email" value="<?php if(isset($_GET['b'])){ echo $_GET['b'];} ?>"> </input>
<span class="color" style="margin:0px !important;"><?php if(isset($_GET['emailErr'])){echo $_GET['emailErr'];} ?></span>
</div>




<div class="form-group">
<label style="margin: 0px 0px 0px 85px;float: left;">Password:&nbsp </label> 
<input class="textfield" id="pass" type="password" name="pass" style="margin: 0px 0px 0px 15px !important; float: left;"></input>
<span class="color"><?php if(isset($_GET['passErr'])){echo $_GET['passErr'];}?></span>
</div>





<section class="onwelcome_login">

    <input type="submit" id="welcomlogin" class="btn-success mButt" value="LogIn"></input>&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="button" id="welcomlogin" class="btn-info mButt" value="Signup" onClick="lgSignup()"></input><br>
    <span style="font-size: 12px;color: #696969;"><a href="#" onclick="forpass()">Forgot Password</a></span>

	
	</section>
	<div id="errorDiv">
<span class="color"><?php if(isset($_GET['loginErr'])){echo $_GET['loginErr'];} ?></span>
</div>


</form>

</div>

</div>

<?php if(isset($_GET['signinerror'])){?>
<script>
$('.textfield').css('border-color','rgba(255, 97, 97, 0.7)');
$('.textfield').addClass('animated shake');
</script>
<?php } ?>

<?php if(isset($_GET['emailErr'])){?>
<script>
$('#email').css('border-color','rgba(255, 97, 97, 0.7)');
$('#email').addClass('animated shake');
</script>
<?php } ?>

<?php if(isset($_GET['passErr'])){?>
<script>
$('#pass').css('border-color','rgba(255, 97, 97, 0.7)');
$('#pass').addClass('animated shake');
</script>
<?php } ?>

<?php if(isset($_GET['loginErr'])){?>
<script>
$('.textfield').css('border-color','rgba(255, 97, 97, 0.7)');
$('.textfield').addClass('animated shake');
</script>
<?php } ?>
loginErr


<?php 

if(isset($_GET['blankErr'])){      

?>

   <script>
   
        $('.popup_container').css("display","block"); 

    </script>
    
<?php

}

?>


<?php

if(isset($_GET['msg']) && !isset($_SESSION['id'])){	      

?>

   <script>
   
   

        $('.popup_container').css("display","block"); 

    </script>
    
<?php

}

?>