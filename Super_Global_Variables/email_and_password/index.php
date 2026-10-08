<?php
$email = $_POST["email"];
$password = $_POST["pass"];
echo "Email is: $email";
echo "<br />";
echo "Password is: $password";
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <form action="" method="POST">
        <label for="em">Enter your email</label>
        <input type="text" id="em" name="email">
        <label for="pass">Enter your password</label>
        <input type="password" id="pass" name="pass">
        <button type="submit">Submit</button>
    </form>
</body>

</html>