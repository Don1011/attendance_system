<?php
    $server_name = "localhost";
    $username = "root";
    $password = "";
    $database_name = "attendance_system";
    
    $conn = mysqli_connect ($server_name, $username, $password, $database_name);
    
    if(!$conn){
        // die("Failed to connect to the database: ".mysqli_connect_error());
        echo("<script type = 'text/javascript'>alert('Error in database connection!')</script>");
    }

?>