<?php

session_start();

$_SESSION['answer'] = $_POST['answer'];

header("Location: index.php");
