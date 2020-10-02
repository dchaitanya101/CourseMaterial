<?php
$errors = array();
    if (isset($_GET['submit'])) {
        $email = $_GET['email'];
        $password = $_GET['password'];

        $actualPassword = 'Hello123';
        $actualEmail = 'abc@gmail.com';

        if ($email == $actualEmail && $password == $actualPassword) {
            session_start();
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
            
            header("Location:home.php");
        } else{
            array_push($errors,'Email and Password is wrong');
        }

    }
    if(!(isset($_GET['submit'])) || count($errors) > 0){

        
            
        
    
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div style="padding: 30px;">
        <form action="" method="get">
            <div class="form-group">
                <label for="Email">Email:</label>
                <input type="email" name="email">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password">
            </div>
            <div class="form-group">
                <input type="submit" value="submit" name="submit" class="btn btn-danger">
            </div>
        </form>
    </div>
    
</body>
</html>

<?php
}
    
?>