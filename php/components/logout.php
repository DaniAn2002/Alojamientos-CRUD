<?php

include_once("user_session.php");

$user_session = new UserSession();
$user_session->closeSession();

header("Location: ../views/login.php");
