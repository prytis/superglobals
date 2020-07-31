<?php


$_POST = json_decode(array_keys($_POST)[0], true);

if(isset($_GET['action']) and $_GET['action'] == 'logout'){
    // session_start();
    unset($_SESSION['userName']);
    unset($_SESSION['userPassword']);
    unset($_SESSION['logged_in']);
}
if ( $_POST['userName'] == $_SESSION['userName'] && 
     $_POST['userPassword'] == $_SESSION['userPassword'] ){
        $GLOBALS['A'] = 1;
        $_SESSION['logged_in'] = true;
        $_SESSION['timeout'] = time();
        $_SESSION['userName'] = $_POST['userName'];
        print('OK');
        // echo json_encode($_SESSION);
} else {
    print('NOT');
}