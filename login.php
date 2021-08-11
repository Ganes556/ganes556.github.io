<?php 
    session_start();

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $user = test_input($_POST['username']);
    $pass = test_input($_POST['password']);    
    $response = array();
    if($user === "GanesSatsangga" && $pass === "123456"){
        $_SESSION['valid'] = true;   
        $response['valid'] = true;
    }else if(empty($user) || empty($pass)){
        $response['empty'] = true;        
    }else{
        $response['invalid'] = true;
    }
    // header('Content-Type: application/array');
    echo json_encode($response);
?>