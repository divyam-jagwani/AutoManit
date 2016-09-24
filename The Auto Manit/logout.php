<?php
session_destroy();
header('location:contact.php?logged=<h2>Logged out successfully!</h2><?php' );
?>