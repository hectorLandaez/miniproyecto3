<?php
session_start();
$user = $_SESSION["user"];

if (!isset($_SESSION["user"])) {
  echo "Debes iniciar sesion primero";
  die();
}

require_once "../config/database.php";
$res = $mysqli->query("select * from usuarios where id = " . $user['id']);
$data = $res->fetch_assoc();

if (isset($data["img_blob"])) {
  $imgBlob = base64_encode($data["img_blob"]);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href='./styles/style.css'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha384-UG8ao2jwOWB7/oDdObZc6ItJmwUkR/PfMyt9Qs5AwX7PsnYn1CRKCTWyncPTWvaS" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
    <title><?php echo $_SESSION["user"]["name"] ?> </title>
 
</head>

<nav>
  <div><img src="../assets/devchallenges.svg" alt="devcicon"> </div>
  <div class="dropdown">
  <div class="imgDivs" style="width: 30px; height: 30px; overflow: hidden;">
            <img style="max-width: 100%; height: 100%; object-fit: cover;" src="<?php echo "data:img/*;base64,$imgBlob"; ?>">
        </div>
    <a class="" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
      <?= $data["name"] ?> <span class="material-symbols-outlined">
        expand_more
      </span>
    </a>

    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
      <li><a class="dropdown-item" href="../views/dashboard.php"> <span class="material-symbols-outlined">
            account_circle
          </span>My Profile</a></li>
      <li><a class="dropdown-item" href="#"><span class="material-symbols-outlined">
            group
          </span>Group </a></li>
          <hr>
      <li><a class="dropdown-item" href="./login.php"> <span class="material-symbols-outlined">
            logout
          </span>Logout </a></li>

    </ul>
  </div>
</nav>

<body>

  <div class="second">
    <div class="personalInfoBox">
      <span class="fTitle">Personal info </span><span> Basic info like your name and photo </span>
    </div>

    <div class="info">
      <div class="divInfo">
        <div class="profileDiv"><span class="sTitle">Profile</span> <span> <?= $data['bio'] ?></span></div>
        <a class="btn btn-outline-secondary" href="./edit.php?id=<?= $data['id'] ?>"> Editar</a>
        <form action="#" style="display: inline;">
        </form>
      </div>

      <div class="divInfo">
        <span class="divTitle">PHOTO</span>
        <div class="img"><img style="max-width: 100%; height: 100%; object-fit: cover;" src="<?php echo "data:img/*;base64,$imgBlob"?>" alt=""></div>
      </div>

      <div class="divInfo">
        <span class="divTitle">NAME</span>
        <span class=" divContent"><?= $data['name'] ?></span>
      </div>

      <div class="divInfo">
        <span class="divTitle">BIO</span>
        <span class=" divContent"> <?= $data['bio'] ?></span>
      </div>
      <div class="divInfo">
        <span class="divTitle">EMAIL</span>
        <span class=" divContent"> <?= $data['email'] ?></span>
      </div>

      <div class="divInfo">
        <span class="divTitle">PASSWORD</span>
        <span class=" divContent">**********</span>
      </div>
    </div>
  </div>

</body>

</html>