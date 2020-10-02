<?php

    if (isset($_GET['submit'])) {
        $name = $_GET['name'];
        $email = $_GET['email'];
        $city = $_GET['city'];
        $state = $_GET['state'];
        $contact = $_GET['contact'];
        $yourself = $_GET['yourself'];
        echo str_word_count($yourself);

        if (strlen($yourself) >= 100) {

            setcookie('name',$name,strtotime('+10 minutes'));
            setcookie('email',$email,strtotime('+10 minutes'));
            setcookie('city',$city,strtotime('+10 minutes'));
            setcookie('state',$state,strtotime('+10 minutes'));
            setcookie('contact',$contact,strtotime('+10 minutes'));
            setcookie('yourself',$yourself,strtotime('+10 minutes'));
            
            header("Location:data.php");
        } else {
            
       
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div style="padding:50px;">
        <form method="get">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email">
            </div> 
            <div class="form-group">
                <label for="contact">Contact</label>
                <input type="text" name="contact">
            </div>
            <div class="form-group">
                <label for="city">City</label>
                <input type="text" name="city">
            </div> 
            <div class="form-group">
                <label for="state">State</label>
                <Select name="state" class="form-control">
                    <option value="Maharashtra" <?php if(isset($_GET['state']) && $_GET['state'] == 'Maharashtra') {echo'selected';}?>>Maharashtra</option>
                    <option value="Goa" <?php if(isset($_GET['state']) && $_GET['state'] == 'Goa') {echo'selected';}?>>Goa</option>
                    <option value="Himachal Pradesh" <?php if(isset($_GET['state']) && $_GET['state'] == 'Himachal Pradesh') {echo'selected';}?>>Himachal Pradesh</option>
                    <option value="Karnataka" <?php if(isset($_GET['state']) && $_GET['state'] == 'Karnataka') {echo'selected';}?>>Karnataka</option>
                    <option value="Assam" <?php if(isset($_GET['state']) && $_GET['state'] == 'Assam') {echo'selected';}?>>Assam</option>
                </Select>
            </div> 
            <div class="form-group">
                <label for="">About Your Self</label>
                <textarea name="yourself" id="" cols="30" rows="10">

                </textarea>

            </div>  
            <div class="form-group">
                <input type="submit" name="submit" class="btn btn-primary" value="submit">
            </div>   
        </form>
    </div>
</body>
</html>

<?php
     }
       

    }

?>