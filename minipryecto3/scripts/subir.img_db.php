<?php
if($_SERVER["REQUEST_METHOD"] === "POST"){
     $tmp_name =$_FILES["imagen"]["tmp_name"];

     $contenido = addslashes(file_get_contents($tmp_name));
     
     session_start();
     $id = $_SESSION["user_id"];


require_once "../config/database.php";

 $mysqli->query("UPDATE usuarios SET img_blob = '$contenido' WHERE id = $id"); 
     

 header("Location: ../views/dashboard.php"); 
}