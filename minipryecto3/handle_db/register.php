<?php

if ($_SERVER["REQUEST_METHOD"] === 'POST') {
   
   //GUARDAR LOS DATSO DEL FORMULARIO ENVIADO EN VARIABLES 
   $username = $_POST["username"];
   $password = $_POST["psswrd"];

   require_once "../config/database.php";

   //corroborar si existe solo un usuario con ese username.
   $res = $mysqli->query("select * from usuarios where username = '$username' AND psswrd = '$password' ");

   if ($res->num_rows === 1) {

      header("location: /minipryecto3/views/dashboard.php");
   } else {

   $mysqli->query("INSERT INTO usuarios (username, psswrd) VALUES ('$username', '$password')");
   session_start();
   $user_data = $res->fetch_assoc();
   $_SESSION["user"] = $user_data;
   header("location: /minipryecto3/views/dashboard.php"); 
   }
}
