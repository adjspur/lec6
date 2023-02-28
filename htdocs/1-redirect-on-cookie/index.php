<?php

// http://127.0.0.1:8080/1-redirect-on-cookie/

if (isset($_COOKIE['redirect'])) {
    header("Location: redirected.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Start</title>
</head>

<body>
    <h1>If you see this, you didn't redirect!</h1>
</body>

</html>