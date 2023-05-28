<?php

session_start();

session_destroy();

header("Location: adm-Index.php");
exit;