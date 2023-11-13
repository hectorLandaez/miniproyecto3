<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,
     initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href='./styles/style.css'>
    <title>LOG IN</title>
</head>

<body>

    <form action="./handle_db/login.php" method="post">

        <div class="logInBox">
            <div><img src="./assets/devchallenges.svg" alt="devcicon"> </div>
            <h6>Join thousands of learners from around the world</h6>
            <p> Master web development by making real-life projects. There are multiple paths for you to choose</p>
            <div class="Inputs">

                <div class="input-group mb-3">
                    <input name="username" type="text" class="form-control" placeholder=<?php echo "email" ?> aria-label="Username" aria-describedby="basic-addon1">
                </div>

                <div class="input-group mb-3">
                    <input name="psswrd" name="username" type="text" class="form-control" placeholder="password" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <button type="submit" type="button" class="btn btn-secondary"> Registrate </button>
            </div>
            <p class="footer">or continue with these social profile</p>

            <div>
                <img src="./assets/Google.svg" alt="devcicon">
                <img src="./assets/Facebook.svg" alt="devcicon">
                <img src="./assets/Twitter.svg" alt="devcicon">
                <img src="./assets/Gihub.svg" alt="devcicon">
            </div>
            <p class="footer"> Adready a member? <a href="./views/login.php"> login</a></p>
        </div>

    </form> 
</body>

</html>