<?php
$id = $_GET["id"];

session_start();
$_SESSION["user_id"] = $id;

require_once "../config/database.php";
$res = $mysqli->query("SELECT * FROM usuarios WHERE id = $id");
$usuario = $res->fetch_assoc();

if (isset($usuario["img_blob"])) {
    $imgBlob = base64_encode($usuario["img_blob"]);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
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

<body>
    <nav>
        <div><img src="../assets/devchallenges.svg" alt="devcicon"> </div>
        <div class="dropdown">
            <div class="imgDivs" style="width: 30px; height: 30px; overflow: hidden;">
                <img style="max-width: 100%; height: 100%; object-fit: cover;" src="<?php echo "data:img/*;base64,$imgBlob"; ?>">
            </div>
            <a class="" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                <?= $usuario["name"] ?> <span class="material-symbols-outlined">
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

    <a href="../views/dashboard.php"><span class="material-symbols-outlined">
            arrow_back_ios
        </span> back</a>
    <div class="third">
        <div class="boxHeader">
            <div class="title">
                <h5>Change Info</h5>
                <p> Changes will be reflected to every services</p>
            </div>
            <div class="subirImagenDiv">
                <form action="../scripts/subir.img_db.php" method="post" enctype="multipart/form-data">
                    <label for="input_img" style="display: flex ; align-items: center; gap: 1rem">
                        <input type="file" accept="image/*" name="imagen" id="input_img" hidden>
                        <div class="imgDiv" style="width: 20%; height: 20%; overflow: hidden;">
                            <img style="max-width: 100%; height: 100%; object-fit: cover;" src="<?php echo "data:img/*;base64,$imgBlob"; ?>">
                        </div>
                        <input type="submit" value="Subir Imagen">
                    </label>
                </form>
            </div>
        </div>

C:\xampp\htdocs\nivel3\minipryecto3\handle_db

        <div class="inputs">
            <form action="../scripts/update.php" method="post">
                <div class="input">
                    <h6> Name</h6>
                    <div class="input-group">
                        <input name="Name" type="text" placeholder=" enter your name" class="inputData" value="<?= $usuario["name"] ?>">
                    </div>
                </div>

                <div class="input">
                    <h6> Bio</h6>
                    <div class="input-group">
                        <input name="Bio" type="text" placeholder=" enter your bio" class="inputData" value="<?= $usuario["bio"] ?>">
                    </div>
                </div>

                <div class="input">
                    <h6> Phone</h6>
                    <div class="input-group">
                        <input name="Phone" type="number" placeholder=" enter your Phone" class="inputData" value="<?= $usuario["phone"] ?>">
                    </div>
                </div>

                <div class="input">
                    <h6> Email</h6>
                    <div class="input-group">
                        <input name="Email" type="email" placeholder=" enter your email" class="inputData" value="<?= $usuario["email"] ?>">
                    </div>

                </div>

                <div class="input">
                    <h6> password</h6>
                    <div class="input-group">
                        <input name="password" type="text" placeholder=" enter your  new password" class="inputData" value="<?= $usuario["psswrd"] ?>">
                    </div>
                </div>

                <div class="inputsave">
                    <button type="submit" type="button" class="btn btn-secondary"> Save</button>
                </div>
            </form>
        </div>

</body>

</html>


