<?php
session_start();
session_unset();
unset(s_session{'loggedin']);
unset(s_session);
session_destroy();
header("location:login.php");

?>
