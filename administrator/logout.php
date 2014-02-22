<?php
    include('inc/config.php');
    session_destroy();
    header("location: index.php");
?>