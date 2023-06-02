<?php

function doRegister() {
    if (isset($_POST['person'])) {
        crudCreate($_POST['person']);
        header('Location: /?page=login');
    }

    renderView('register');
}

function doLogin() {
    renderView('login');
}

function doNotFound() {
    renderView('not_found');
    http_response_code(404);
}