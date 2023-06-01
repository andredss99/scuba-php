<?php

$page = ($_GET['page'] ?? 'login');

switch ($page) {
    case 'login':
        doLogin();
        break;

    case 'register':
        doRegister();
        break;

    default:
        doNotFound();
        break;
}