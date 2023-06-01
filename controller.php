<?php

function doRegister() {
    renderView('register');
}

function doLogin() {
    renderView('login');
}

function doNotFound() {
    renderView('not_found');
    http_response_code(404);
}