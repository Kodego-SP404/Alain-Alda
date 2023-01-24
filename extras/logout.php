<?php
session_start();

// destroy session
session_destroy();
header('Location: /alda/phpdemo/13_sessions.php');