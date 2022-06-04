<?php
    // Zapis podataka u XML datoteku
    $username='';
    $password='';

    if (isset($_POST['username']) && isset($_POST['password2']))
    {
        $username = $_POST['username'];
        $password = $_POST['password2'];
    }

    $xml = new DOMDocument('1.0');
    $xml->formatOutput=true;
    $xml->preserveWhiteSpace = false;
    $xml->load("users.xml");

    if(!$xml)
    {
        $accounts=$xml->createElement("Accounts");
        $xml->appendChild($accounts);
    }

    else
    {
        $accounts=$xml->firstChild;
    }

    if (isset($_POST['submit']))
    {
        $account = $xml->createElement("Account");
        $accounts->appendChild($account);
    
        $username_form = $xml->createElement("username", "$username");
        $account->appendChild($username_form);
    
        $password_form = $xml->createElement("password", "$password");
        $account->appendChild($password_form);
    
        $xml->save("users.xml") or die("Error");

        header("Location: login.php");
    }    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.css">
    <script type="text/javascript" src="jquery-1.11.0.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
    <script src="js/form-validation.js"></script>
    <title>Test</title>
</head>
<body>
    <div class="registracija-box">
        <form action="register.php" method="POST" id="register-form">
            <label for="username">Username</label><br>
            <input type="text" name="username" id="username"><br>
            
            <label for="password1">Password</label><br>
            <input type="password" name="password1" id="password1"><br>
            
            <label for="password2">Repeat Password</label><br>
            <input type="password" name="password2" id="password2"><br><br>

            <button type="submit" name="submit">Registracija</button>
        </form>
    </div>
</body>
</html>