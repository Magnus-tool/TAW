<?php
session_start();


if (isset($_SESSION['user'])) {
    echo "Witam w panelu administracyjnym " . $_SESSION['user'] . "!";
    echo "<a href='logout.php'> Logout </a>";
} else {
    
     header("Location: index.php");
    exit();
}


?>
