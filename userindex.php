    <?php
    session_start();
    if (!isset($_SESSION['email'])) {
        echo '<script type="text/javascript">
            alert("You are not allowed to access this page.");
        window.location = "login.php";
        </script>';
        exit(0);
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Welcome to User
</body>
</html>