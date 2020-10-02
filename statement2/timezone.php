<?php

    if (isset($_GET['submit'])) {
        $timezone = $_GET['timezone'];
        date_default_timezone_set($timezone);
        echo 'Date/Time: '. date('d/m/Y H:i:sA');
    }
    

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <div>
            <label for="">Timezone</label>
            <select name="timezone" id="">
                <option value="" >Select Timezone</option>
                <option value="Asia/Calcutta" <?php if(isset($_GET['timezone']) && $_GET['timezone'] == 'Asia/Calcutta') {echo'selected';}?>>India</option>
                <option value="America/New_York" <?php if(isset($_GET['timezone']) && $_GET['timezone'] == 'America/New_York') {echo'selected';}?>>New York(USA)</option>
                <option value="Africa/Cairo" <?php if(isset($_GET['timezone']) && $_GET['timezone'] == 'Africa/Cairo') {echo'selected';}?>>Egypt</option>
                <option value="America/Argentina/Jujuy" <?php if(isset($_GET['timezone']) && $_GET['timezone'] == 'America/Argentina/Jujuy') {echo'selected';}?>>Argentina</option>
                <option value="America/Chicago" <?php if(isset($_GET['timezone']) && $_GET['timezone'] == 'America/Chicago') {echo'selected';}?>>Chicago</option>
            </select>
            <button type="submit" name="submit">Submit</button>
        </div>

    </form>
</body>
</html>