<?php
    session_start();
    echo "<script type='text/javascript'>";
    echo "alert('You have successfully log out in')";
    echo "</script>";
    session_destroy();
    header("location: yform.php");



?>