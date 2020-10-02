<?php
var_dump($_GET);
   
   $errors = array(); 
    if (isset($_GET['submit'])) {

        $fname = $_GET['fname'];
        $password = $_GET['password'];
        $dropdown = $_GET['dropdown'];
        
        
        if (empty($fname)) {
            array_push($errors,'fname');
        }
        if (empty($password)) {
            array_push($errors,'password');
        }
        if (empty($dropdown)) {
            array_push($errors,'dropdown');
        }

        for ($i=0; $i <count($errors) ; $i++) { 
            echo $errors[$i];
        }

        if(count($errors)==0){
            // echo 'Name :' . $fname;
            // echo 'GameName :'. $dropdown;
            
        }
        
        
    }

    
    
    

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
            <div class="form-group" >
                <label for="name">First Name</label>
                <input type="text" name="fname">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password">
            </div>
            <div class="form-group">
                <label for="Game">Select a game u Play</label>
                <select name="dropdown" class="form-control">
                    <option value="">---Please Select a game---</option>
                    <option value="raindow6seige" <?php if(isset($_GET['gameName']) && $_GET['gameName'] == 'raindow6seige') {echo'selected';}?>>Rainbow6</option>
                    <option value="valorant" <?php if(isset($_GET['gameName']) && $_GET['gameName'] == 'valorant') {echo'selected';}?>>Valorant</option>
                    <option value="mainecraft" <?php if(isset($_GET['gameName']) && $_GET['gameName'] == 'minecraft') {echo'selected';}?>>Minecraft</option>
                </select>
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>

