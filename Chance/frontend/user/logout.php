<?php

require '../conn.php';
require '../login-blog.php';

unset ($_SESSION['login']);
unset ($_SESSION['senha']);
header('Location: ../index.php');


?>