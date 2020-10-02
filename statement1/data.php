<?php
if (isset($_GET['name'])) {
    echo 'Name: '.$_COOKIE['name'].'<br>';
    echo 'Email: '.$_COOKIE['email'].'<br>';
    echo 'Contcat: '.$_COOKIE['contact'].'<br>';
    echo 'City' . $_COOKIE['city'].'<br>';
    echo 'State: '.$_COOKIE['state'].'<br>';
    echo ' About Yourself: '.$_COOKIE['yourself'];

}

?>