<?php 

$time = time() - (20 * 60);
setcookie("USER", "jkhvddbvvvhdv", $time, "/");

header("Location: ./index.php");