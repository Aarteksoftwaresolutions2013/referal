<?php session_start(); 
include "config.php";



function keyCreator(){
    
$key1= substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ", 5)), 0, 6);
$key2= substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ", 5)), 0, 6);
$key3= substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ", 5)), 0, 6);
$key4= substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ", 5)), 0, 6);
$key5= substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ", 5)), 0, 6);

$final_key=$key1."-".$key2."-".$key3."-".$key4."-".$key5; 
    
    return $final_key;
}



$name= $_POST['name'];

$email= $_POST['email'];

$username= $_POST['UserName'];

$pass=$_POST['pass'];

$checkbox=$_POST['checkbox'];

$captcha=$_POST['captcha_code'];

if(isset($_POST['key'])){
	$key=($_POST['key']);
}

if(isset($_POST['checkboxForPromotional'])){
	$checkboxValue="1";
}else{
	$checkboxValue="0";
}

if(empty($name) && empty($email) && empty($username) && empty($pass)){

	header('location:index.php?&error=Please Fill all fields&blankErrSignUp=1&key='.$key.'');
}
else if(empty($name)){

		header('location:index.php?email='.$email.'&c='.$username.'&nameErr=Please Fill name&blankErrSignUp=1&key='.$key.'');
}

else if(!preg_match("/^[a-zA-Z -]+$/", $_POST['name'] )){

	header('location:index.php?nameErr=Fill correct name&a='.$name.'&email='.$email.'&c='.$username.'&blankErrSignUp=1&key='.$key.'');
}

else if(empty($email)){

		header('location:index.php?a='.$name.'&c='.$username.'&emailErr=Please Fill Email&blankErrSignUp=1&key='.$key.'');
}

else if( filter_var($email,FILTER_VALIDATE_EMAIL)=== false){

		header('location:index.php?a='.$name.'&email='.$email.'&c='.$username.'&emailErr=Enter a valid email&blankErrSignUp=1&key='.$key.'');		
}

else if(empty($username)){

	header('location:index.php?a='.$name.'&email='.$email.'&usernameErr=Please Fill username&blankErrSignUp=1&key='.$key.'');
}

else if(empty($pass)){

		header('location:index.php?a='.$name.'&email='.$email.'&c='.$username.'&passErr=Please Fill password&blankErrSignUp=1&key='.$key.'');
}

else if(empty($captcha)){
	header('location:index.php?a='.$name.'&email='.$email.'&c='.$username.'&capthaError=Please fill the captcha&blankErrSignUp=1&key='.$key.'');
}
else if(strcasecmp($_SESSION['captcha_code'], $_POST['captcha_code']) != 0){  
		header('location:index.php?a='.$name.'&email='.$email.'&c='.$username.'&capthaError=The captcha code does not match!&blankErrSignUp=1&key='.$key.'');		
	} 
else if (empty($checkbox)){
	header('location:index.php?a='.$name.'&email='.$email.'&c='.$username.'&checkboxError=Please check the checkbox&blankErrSignUp=1&key='.$key.'');
}
else if(isset($_POST['key'])  &&  $_POST['key']!=""){
                
				   ob_start();  
				   system('ipconfig /all');  
				   $mycomsys=ob_get_contents();  
				   ob_clean();  
				   $find_mac = "Physical";  
				   $pmac = strpos($mycomsys, $find_mac);  
				   $macaddress=substr($mycomsys,($pmac+36),17);
				   
			  $macInDb=mysqli_query($connect,"SELECT mac_id FROM `users` WHERE `mac_id`='$macaddress'");		
			  $countMac=mysqli_num_rows($macInDb);		
	if($countMac>0){	
			  header('location:index.php?a='.$name.'&email='.$email.'&c='.$username.'&	error=you cannot signup from this system again&blankErrSignUp=1');
					} 
					}

else{

$a=mysqli_query($connect,"SELECT * FROM users WHERE email='".$email."' ");

$b=mysqli_query($connect,"SELECT * FROM users WHERE user_name='".$username."' ");

$count=mysqli_num_rows($a);

$count1=mysqli_num_rows($b);

            if($count>0)
            {

                header('location:index.php?a='.$name.'&email='.$email.'&c='.$username.'&emailErr=Allready Exist&blankErrSignUp=1&key='.$key.'');
            }
            else if($count1>0)
            {
             header('location:index.php?a='.$name.'&email='.$email.'&c='.$username.'&userAlready=Already Exist&blankErrSignUp=1&key='.$key.'');
            }

            else
            {
                  
				//-------code for getMac address---------//
				   ob_start();  
				   system('ipconfig /all');  
				   $mycomsys=ob_get_contents();  
				   ob_clean();  
				   $find_mac = "Physical";  
				   $pmac = strpos($mycomsys, $find_mac);  
				   $macaddress=substr($mycomsys,($pmac+36),17);  
				//-------code for getMac address---------//
   
				
                
                 $text = $pass;
                 include "encrypt.php";
                 $pass = $text_enc;
                 
                 
                $sql=mysqli_query($connect,"INSERT INTO users (name,email,user_name,password,mac_id,is_promotional)

                            VALUES('".$name."','".$email."','".$username."','".$pass."','".$macaddress."','".$checkboxValue."')") or die(mysqli_error());

                            
                $lastId=mysqli_insert_id($connect);              

                $key=keyCreator();

                $keyCheck=mysqli_query($connect,"SELECT * FROM `refer_url` WHERE `key`='".$key."'");	

                $keyCount=mysqli_num_rows($keyCheck);

                if($keyCount!=0)
                {
                    
                   $key=keyCreator(); 
                    
                }

                $que="INSERT INTO `refer_url` (`user_id`,`key`)	VALUES ('".$lastId."','".$key."')";

                  
                $sql=mysqli_query($connect,$que) or die(mysqli_error());



                if(isset($_POST['key'])  &&  $_POST['key']!=""){
                
                $key_post=$_POST['key'];
                
               
                $key_user_data=mysqli_query($connect,"SELECT * FROM `refer_url` WHERE `key`='".$key_post."'");	
                
                while($key_user_value= mysqli_fetch_assoc($key_user_data)){

                       $key_user_id=$key_user_value['user_id'];
                        

                }	
                
                
    $quee="INSERT INTO `referel_value` (`key`,`key_user_id`,`refered_user_id`)VALUES ('".$key_post."','".$key_user_id."','".$lastId."')";

                  
                $sql=mysqli_query($connect,$quee) or die(mysqli_error());
                
                
                }
               

                        

            header('location:index.php?msg=signupsuccessfull');    
                                

            }      

}                  

 ?>
