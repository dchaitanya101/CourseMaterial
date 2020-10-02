<?php

    session_start();
    if (isset($_SESSION['email'])) {
        
   

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        <?php

            echo 'Welcome '. $_SESSION['email']
        ?>
    </h1>
    <a href="logout.php">LOGOUT</a>
</body>
</html>
<?php
 }else{
     header('Location: login.php');
 }

 ?>