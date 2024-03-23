<?php

  session_start();
  $_SESSION["logIn"] = "-1";  
header("Location: Login/web/index.php");
?>