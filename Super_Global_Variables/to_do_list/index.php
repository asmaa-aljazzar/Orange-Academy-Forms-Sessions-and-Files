<?php
session_start(); // start the session

if (!isset($_SESSION["items"])) { // if there is no items array in session create it
    $_SESSION["items"] = [];
}
if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $item = $_POST["item"] ?? "";
        if ($item !== "")
            $_SESSION["items"][] = $item; // array items[] in the session
    }
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo</title>
</head>

<body>
    <form action="" method="POST">
        <label for="item">Enter a new item</label>
        <input type="text" id="item" name="item">
        <button type="submit">Add new item</button>
    </form>
    <ul>
        <?php foreach ($_SESSION["items"] as $item): ?>
            <!-- Shortcut for ?php echo -->
            <li><?= htmlspecialchars($item) ?></li>
       <?php endforeach; ?>
    </ul>
</body>

</html>
