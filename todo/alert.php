<?php 

session_start();

if(isset($_SESSION['alert'])) {
    $alert = json_decode($_SESSION['alert'], true); // associative array

    $message = $alert['message'];
    $status = $alert['status'];

    ?>
        <script>
            alert("<?= $status . ": " .  $message ?>")
        </script>
    <?php

    unset($_SESSION['alert']);
}