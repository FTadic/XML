<?php
    $xml = simplexml_load_file("users.xml");

    if (isset($_POST['username']) && isset($_POST['password']))
    {
        $usernameCheck = $_POST['username'];
        $passwordCheck = $_POST['password'];

        foreach ($xml->Account as $usr) 
        {
            $usern = $usr->username;
            $passwordC = $usr->password;
            // $usrime = $usr->ime;
            // $usrprezime = $usr->prezime;
            if ($usernameCheck == $usern) 
            {
                if ($passwordCheck == $passwordC) 
                {
                    header("Location: index.html");
                }
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <script type="text/javascript" src="jquery-1.11.0.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
    <script src="js/login-validation.js"></script>
    <title>Test</title>
</head>
<body>
    <div class="login-box">
        <form action="login.php" method="POST" id="login-form">
            <label for="username">Username</label><br>
            <input type="text" name="username" plac><br>
            
            <label for="password">Password</label><br>
            <input type="password" name="password"><br><br>

            <button type="submit" name="submit">Prijava</button>
            <a href="register.php">Registriraj se</a>
        </form>
    </div>
</body>
</html>