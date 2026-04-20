<?php
session_start();

// apaga tudo da sessão
session_destroy();

// volta pra home
header("Location: index.php");
exit;