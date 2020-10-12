<?php
session_start();
// session_unset();
// session_commit();
session_destroy();

session_start();
session_regenerate_id();
// session_reset();
session_destroy();
header("location:index.php");
?>