<?php
session_start();
unset($_SESSION['r']);
unset($_SESSION['count']);
session_destroy();
echo "<meta http-equiv=refresh content=0;URL='./problem.php'>\n";