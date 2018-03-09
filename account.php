<?php

session_start();
if ($_SESSION['userLoggedIn']){
    echo 'Top Top Top Secret information here !';
} else {
    header("Location: index.php");
}

?>

