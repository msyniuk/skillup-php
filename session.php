<?php

session_start();

$_SESSION['user'] = 'somebody';

?>
<a href="readsession.php">Узнать значение session</a>
