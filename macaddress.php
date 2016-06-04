<?php  
   
   ob_start();  
   system('ipconfig /all');  
   $mycomsys=ob_get_contents();  
   ob_clean();  
   $find_mac = "Physical";  
   $pmac = strpos($mycomsys, $find_mac);  
   $macaddress=substr($mycomsys,($pmac+36),17);  

   echo $macaddress;
   
?>