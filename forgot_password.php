<div class="popup_container3" style="display:none";>

<div class="popup welcomepage2">
<?php

 if(isset($_GET['error'])){

?>
 <div id="close1"><a href="index.php"><img src="images/close.png" width="30px"></a></div>

<?php
 
 }else{
 ?>
<div id="close1"><img onClick="popup_hide2()" src="images/close.png" width="30px"></div>

 <?php
 }
 ?>

<div  class="top_head">

<h3 style="font-weight: bold;padding-top: 7px;">Forgot Password</h3>
</div>

<form id="form" action="forgot_password_recover.php" method="post" style="margin: 25px auto;text-align: center;">
<span class="color" id="forPass" style="margin-right: 15px;"></span><br><br>
<label >E-mail: &nbsp &nbsp &nbsp </label> 

<input class="textfield" id="email" type="text" onBlur="checkEmailAvailable(this.value)" name="email" > </input>



<br><br><br>


<section class="onwelcome_login">

    <input type="submit" id="frPass" class="btn-success mButt" value="Send Password"></input>&nbsp;&nbsp;&nbsp;&nbsp;
    
</section>

<div id="errorDiv">
<span class="color"><?php if(isset($_GET['loginErr'])){echo $_GET['loginErr'];} ?></span>
</div>

</form>

</div>


</div>

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

if(isset($_GET['key']) && !isset($_SESSION['id'])){      

?>

   <script>
   
   

        $('.popup_container').css("display","block"); 

    </script>
    
<?php

}

?>