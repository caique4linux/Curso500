<?php

$_SESSION['logado'] = false;
$_SESSION['username'] = '';
$_SESSION['id'] = '';

session_commit();
session_destroy();

header('Location: ?pagina=login');