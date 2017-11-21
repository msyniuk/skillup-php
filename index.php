<?php

include 'init.php';

setcookie('user', 'tester', time() - 3 * 3600);

?>
<a href="readcookie.php">Узнать значение cookie</a>
<br/>
<a href="logout.php">Logout</a>
