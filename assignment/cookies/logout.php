<?php

setcookie("LOGGED_USER", "", time() - (60 * 60), "/");
header("Location: ./index.php");