<?php

$nick = isset($_GET['data']) ? htmlspecialchars($_GET['data'], ENT_QUOTES, 'UTF-8') : '';
$type = isset($_GET['type']) ? htmlspecialchars($_GET['type'], ENT_QUOTES, 'UTF-8') : '';



if (!empty($nick) && !empty($type)) {
    
    if ($type == 'enter'){ 
        setcookie('Nick', $nick, array(
	        'expires' => strtotime('+1 days'),
	        'path' => '/',
	        'secure' => true,  
	        'httponly' => true,  
            'samesite' => 'Strict'
        ));

        echo json_encode(array('success' => $_COOKIE['NickName']));
    }
    
    
} else {
    echo json_encode(array('success' => 'Error'));
}


?> 
