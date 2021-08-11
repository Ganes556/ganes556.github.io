<?php    

    if(isset($_POST['logout']) && $_POST['logout']){
        session_start();
        session_unset(); 
        session_destroy();        
        echo true;
    }else{
        $_POST['valid'] = false;
    }
    
?>