<?php

if (isset($_GET['type']) && isset($_GET['data'])) {
    
    $type = $_GET['type'];
    if ($type == 'enter'){ 
        setcookie('Nick', $_GET['data'], array(
	        'expires' => strtotime('+1 days'),
	        'path' => '/',
	        'secure' => true,  
	        'httponly' => true,  
        ));

        echo json_encode(array('success' => $_COOKIE['NickName']));
    }
    
    
} else {
    echo json_encode(array('success' => 'Error'));
}


?> 