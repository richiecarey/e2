<?php

session_start();

if (is_numeric($_POST['maxRounds'])) {
    $_SESSION['maxRounds'] = $_POST['maxRounds'];
} else {
    $_SESSION = [];
}

header("Location: index.php");
