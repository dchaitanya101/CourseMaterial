<?php
session_start();
echo $_SESSION['my_name'];

session_destroy();

echo $_SESSION['my_name'];

?>