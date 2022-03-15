<?php


$LOGIN_USERNAME=$LOGIN_PASSWORD=$LOGINAS=$ADMIN_CRED="";


if(isset($_POST['proceed'])){
    $LOGIN_USERNAME = $_POST['username_login'];
    $LOGIN_PASSWORD = $_POST['password_login'];
    $LOGINAS = $_POST['usertype'];

    // setup cookies
    setcookie('username',$LOGIN_USERNAME,time()+(86400*1),'/');
    setcookie('password',$LOGIN_PASSWORD,time()+(86400*1),'/');
    setcookie('user_type',$LOGINAS,time()+(86400*1),'/');
    if($LOGINAS == 'admin' && isset($_POST['admin_cred']) && strlen($_POST['admin_cred'])>=4 && strlen($LOGIN_USERNAME)>=4 && strlen($LOGIN_PASSWORD)>=8){

        $ADMIN_CRED = $_POST['admin_cred'];


    }
    elseif ($LOGINAS=="student") {
        # code...
    }












    if (isset($_COOKIE['username'])) {
        echo("Username: ".$_COOKIE['username']);
    }
}

?>