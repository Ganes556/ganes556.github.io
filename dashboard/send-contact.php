<?php 
    if(empty($_POST['full-name']) && empty($_POST['email']) && empty($_POST['comments'])){
        echo false;    
    }else{
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "contactme";
        $conn = new mysqli($servername, $username, $password, $dbname);
        
        $fullName = $conn -> real_escape_string($_POST['full-name']);
        $email = $conn -> real_escape_string($_POST['email']);
        $comments = $conn -> real_escape_string($_POST['comments']);

        $insert = $conn-> prepare
        ('
            INSERT INTO response_user (full_name,email,comments)
            VALUES (?,?,?);
        ');
        $insert->bind_param('sss',$fullName,$emai,$comments);
        $insert->execute();
        $insert->close();
        $conn->close();
        echo true;
    }    
?>