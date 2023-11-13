<?php

if ($_SERVER["REQUEST_METHOD"] === 'POST') {
   
   //GUARDAR LOS DATSO DEL FORMULARIO ENVIADO EN VARIABLES 
   $username = $_POST["username"];
   $password = $_POST["psswrd"];

   require_once "../config/database.php";

   //corroborar si existe solo un usuario con ese username.
   $res = $mysqli->query("select * from usuarios where username = '$username' AND psswrd = '$password' ");

   if ($res->num_rows === 1) {

      $user_data = $res->fetch_assoc();

      //guardar los datos del usuario en una variable de sesion
      session_start();
      $_SESSION["user"] = $user_data;

      header("location: /minipryecto3/views/dashboard.php");
   } else {

   header("location: /minipryecto3/index.php"); 
   }
}
