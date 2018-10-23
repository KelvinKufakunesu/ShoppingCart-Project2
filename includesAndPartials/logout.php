<?php
session_start();
session_destroy();
header('Location: /linda_storgard_crud/index.php');
?>