<?php
require '../config.php';


session_destroy();

header("location:".BUA.'login.php');

?>