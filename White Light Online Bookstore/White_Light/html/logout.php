<?php

require_once('../includes/config.php');
include('../includes/header.php');

hasAccess();

if (isset($_SESSION['logged'])) {
  unset($_SESSION['logged']);
  unset($_SESSION['userId']);
}


redirect('index');
















// asdjas
