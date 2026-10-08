<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $url = $_POST["url"] ?? ""; //If there is a value put it, if not -> "".
    if (!empty($url)) {
        header("location: $url");
        exit; // PHP doesn't automatically stop executing
    }
}
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Engine</title>
</head>

<body>
    <form action="" method="POST">
        <label for="url"></label>
        <input type="text" id="url" name="url">
        <button type="submit">GO</button>
    </form>
</body>

</html>