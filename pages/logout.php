<?php

session_start();

session_destroy();

header('Location: http://localhost/sky/pages/home.php?success=logout');
exit();

?>