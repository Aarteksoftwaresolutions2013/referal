<?php
include "config.php";


if(isset($_GET['q'])){

$email=$_GET['q'];

$a=mysqli_query($connect,"SELECT * FROM users WHERE email='".$email."' ");

$count=mysqli_num_rows($a);

if($count>0){

	echo "Already Exist";
}

}


if(isset($_GET['u'])){

$user=$_GET['u'];

$a=mysqli_query($connect,"SELECT * FROM users WHERE user_name='".$user."' ");

$count=mysqli_num_rows($a);

if($count>0){

	echo "Already Exist";
}

}


if(isset($_GET['f'])){

$for=$_GET['f'];

$a=mysqli_query($connect,"SELECT * FROM users WHERE email='".$for."' ");

$count=mysqli_num_rows($a);

if($count==0){

	echo "Email not registered yet";
}

}


function whileee($u_id, $connect)
{
    
 $result=query($u_id, $connect);
    
         while($get_name= mysqli_fetch_assoc($result))
         {
                   
                   $GLOBALS['mainCount']++;
                   
                  // echo $get_name['refered_user_id']."<br>";
                  //  recursive($get_name['refered_user_id'], $connect); 
                  
                   whileee($get_name['refered_user_id'], $connect);            
         }   
    
}

function query($value, $connect){
    
    $logincheck=mysqli_query($connect,"SELECT * FROM referel_value WHERE key_user_id='".$value."'");
    
    return $logincheck;
}



/*function recursive($get_id, $connect){
 
$count=mysqli_query($connect,"SELECT * FROM referel_value WHERE key_user_id='".$get_id."'");	

$countTotal=mysqli_num_rows($count); 
   
}*/





if(isset($_GET['s'])){

$for=$_GET['s'];

$mainCount=0;

whileee($for, $connect);

echo $mainCount;

}


?>