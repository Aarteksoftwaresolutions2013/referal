


<!doctype html>
<html>
<head>
<meta charset="utf-8">

<script type='text/javascript'>
function refreshCaptcha(){
	var img = document.images['captchaimg'];
	img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
}
</script>
</head>


<div class="popup_container2" style="display:none";>

<div class="popup welcomepage1">


<?php

 if(isset($_GET['error'])){

?>

 <div id="close2"><a href="index.php"><img src="images/close.png" width="30px"></a></div>

<?php
 
 }else{
 ?>
<div id="close2"><img onClick="popup_hide1()" src="images/close.png" width="30px"></div>

 <?php
 }

 ?>

<div class="top_head" style="text-align:center">

<h3 style="font-weight:bold;padding-top: 7px;">

Sign Up

</h3>

</div>

<form id="form" class="form-horizontal" action="signupvalid.php" method="post" style="margin: 20px auto;text-align: center;
overflow-y:auto;height: 438px;overflow-x: hidden;" name="form1" id="form1">






<?php

if(isset($_GET['key'])){

?>
<input type="hidden" value="<?php echo $_GET['key']; ?>" name="key"></input>

<?php

 }

?>

<?php
if(isset($_GET['key']) && !isset($_SESSION['id'])){      

?>

   <script>
   
   

        $('.popup_container2').css("display","block"); 

    </script>
    
<?php

}

?>
<div class="form-group formgrp">
      <span class="color" style="margin-right: 35px;"><?php if(isset($_GET['error'])){ echo $_GET['error'];} else if(isset($_GET['capthaError'])){ echo $_GET['capthaError'];}
else if(isset($_GET['checkboxError'])){ echo $_GET['checkboxError'];}	  ?></span><br>
      <label class="control-label col-sm-4" for="email">Name:</label>
      <div class="col-sm-4">
          
        <input class="textfield"  id="name" type="text" name="name"  value="<?php if(isset($_GET['a'])){ echo $_GET['a']; }?>"> </input>
         </div>
<span class="color"><?php if(isset($_GET['nameErr'])){echo $_GET['nameErr'];}?></span>
     

    </div>

    <div class="form-group formgrp">

      <label class="control-label col-sm-4" for="email">Email:</label>

      <div class="col-sm-4">

<input  onBlur="checkEmail(this.value)" class="textfield email" id="email" type="text" name="email" value="<?php if(isset($_GET['email'])){ $_GET['email']; echo $_GET['email'];} ?>"> </input>
</div>
    <span class="color" id="emailError"><?php if(isset($_GET['emailErr'])){echo $_GET['emailErr'];} ?></span>

      

    </div>

    <div class="form-group formgrp">

      <label class="control-label col-sm-4" for="email">UserName:</label>

      <div class="col-sm-4">	

       <input onBlur="checkUser(this.value)" class="textfield" id="username" type="text" name="UserName" value="<?php if(isset($_GET['c'])){ $_GET['c']; echo $_GET['c'];} ?>"></input>
</div>
       <span class="color" id="userAlready"><?php  if(isset($_GET['usernameErr'])){echo $_GET['usernameErr'];}else if(isset($_GET['userErr'])){echo $_GET['userErr'];} else if(isset($_GET['userAlready'])){echo $_GET['userAlready'];}?></span>

      

    </div>

    <div class="form-group formgrp">

      <label class="control-label col-sm-4" for="pwd" >Password:</label>

      <div class="col-sm-4">          

        <input class="textfield pass" id="pass" type="password" name="pass"></input>
		</div>
		<span class="color"><?php if(isset($_GET['passErr'])){echo $_GET['passErr'];} ?></span>  
	  </div>
	  <!-- trying to make i accept and captcha -->

	  <div class="checkbox checkbox-success">
	<label><input  type="checkbox" name="checkboxForPromotional">Send me promotional content</label>
	</div>
	  
	 
  <table width="400" border="0"  align="center" cellpadding="5" cellspacing="1">
    <?php if(isset($msg)){?>
    <tr>
      <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
    </tr>
    <?php } ?>
    <tr>
      
      <td><img  src="captcha.php?rand=<?php echo rand();?>" id='captchaimg'><br>
        <label for='message'>Enter the code above here :</label>
        <br>
        <input class="textfield" id="captcha_code" name="captcha_code" type="text">
        <br>
        Can't read the image? click <a href='javascript: refreshCaptcha();'>here</a> to refresh.</td>
    </tr>
    
  </table>

 
	<div class="checkbox">
	<label><input type="checkbox" name="checkbox" class="checkboxAnimate">I accept the terms & conditions</label>
	
	</div>
	  
    <!-- trying to make i accept and captcha -->	
	
       <input type="submit" id="signup" class="btn-info mButt" value="SignUp" name="Submit" ></input>
       
       <p>Already have an account?</p>
       <br>
       <input type="button" id="signup" onClick="signupLg()" class="btn-warning mButt" value="Login"></input>

   
</form>

</div>
</div>

<?php if(isset($_GET['error'])){?>
<script>
$('.textfield').css('border-color','rgba(255, 97, 97, 0.7)');
$('.textfield').addClass('animated shake').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',function(){
$('.textfield').removeClass('animated shake');	
	
});

</script>
<?php } ?>

<?php if(isset($_GET['nameErr'])){?> 
<script>
$('#name').css('border-color','rgba(255, 97, 97, 0.7)');
$('#name').addClass('animated shake').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',function(){
$('#name').removeClass('animated shake');	
});
</script>
<?php } ?>

<?php if(isset($_GET['emailErr'])){?> 
<script>
$('.email').css('border-color','rgba(255, 97, 97, 0.7)');
$('.email').addClass('animated shake').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',function(){
$('.email').removeClass('animated shake');	
});
</script>
<?php } ?>

<?php if(isset($_GET['usernameErr'])){?> 
<script>
$('#username').css('border-color','rgba(255, 97, 97, 0.7)');
$('#username').addClass('animated shake').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',function(){
$('#username').removeClass('animated shake');	
});
</script>
<?php } ?>

<?php if(isset($_GET['passErr'])){?> 
<script>
$('.pass').css('border-color','rgba(255, 97, 97, 0.7)');
$('.pass').addClass('animated shake').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',function(){
$('.pass').removeClass('animated shake');	
});
</script>
<?php } ?>

<?php if(isset($_GET['capthaError'])){?> 
<script>
$('#captcha_code').css('border-color','rgba(255, 97, 97, 0.7)');
$('#captcha_code').addClass('animated shake').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',function(){
$('#captcha_code').removeClass('animated shake');	
});
</script>
<?php } ?>

<?php if(isset($_GET['checkboxError'])){?> 
<script>
$('.checkboxAnimate').addClass('animated flip').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',function(){
$('.checkboxAnimate').removeClass('animated flip');	
});
</script>
<?php } ?>











<?php 

if(isset($_GET['blankErrSignUp'])){        

?>

   <script>
  

   $('.popup_container2').css("display","block");   
   $('.popup_container').css("display","none");   
 
    </script>

<?php

}

?>