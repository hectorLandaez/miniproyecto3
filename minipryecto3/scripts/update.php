<?php
if($_SERVER["REQUEST_METHOD"] === "POST"){

    extract($_POST);
    
    session_start();
    $id = $_SESSION["user_id"];
    var_dump($_POST);
     if($Name !=="" && $password !=="" ){
        require_once "../config/database.php";
        $mysqli->query("UPDATE usuarios SET name = '$Name', bio = '$Bio', email = '$Email', psswrd = '$password',phone = '$Phone'  WHERE id = $id");
    }
    header("Location: ../views/dashboard.php"); 
}
