<?php
 
$cipher = mcrypt_module_open(MCRYPT_RIJNDAEL_256, '', MCRYPT_MODE_CBC, '');
$iv_size = mcrypt_enc_get_iv_size($cipher);
 
$key = '12345678901234561234567890123456';
$iv =  '9532654BD781547023AB4FA7723F2FCD';
 
// Encrypt
if (mcrypt_generic_init($cipher, $key, $iv) != -1)
{
    $encrypted = mcrypt_generic($cipher, $text);
    mcrypt_generic_deinit($cipher);
	
	$text_enc = bin2hex($encrypted);
}

?>