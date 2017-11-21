<?php

include 'init.php';

unset($_SESSION['user']);

header('location: login.php');