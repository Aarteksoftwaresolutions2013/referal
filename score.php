<?php
session_start();

include "config.php";

$mainCount=0;

$u_id=$_SESSION['id'];

//echo $u_id;


whileee($u_id, $connect);

echo $mainCount;




























function whileee($u_id, $connect){
    
 $result=query($u_id, $connect);
 
// $result=mysqli_query($connect,"SELECT * FROM referel_value WHERE key_user_id='".$u_id."'");
    
 while($get_name= mysqli_fetch_assoc($result))
{
           
           $GLOBALS['mainCount']++;
           
           //echo $get_name['refered_user_id'];
           
            recursive($get_name['refered_user_id'], $connect); 
            
           echo "<pre>";
           print_r($get_name);
           whileee($get_name['refered_user_id'], $connect);
           echo "</pre>";
              
}   
    
}

	


    
    
    

function query($value, $connect){
    
    $logincheck=mysqli_query($connect,"SELECT * FROM referel_value WHERE key_user_id='".$value."'");
    
    return $logincheck;
    
}



function recursive($get_id, $connect){
 
 
 
$count=mysqli_query($connect,"SELECT * FROM referel_value WHERE key_user_id='".$get_id."'");	

$countTotal=mysqli_num_rows($count);

echo "count".$countTotal;  
   
}  
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    





















    
    

?>