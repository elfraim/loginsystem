<?php 
    if(isset($_POST['submit'])) {
        session_start(); // actually starts it in this document to kill it in all
        session_unset(); // removes all the session vars
        session_destroy(); // removes session 
        header("Location: ../index.php");
        exit();
    }

?>