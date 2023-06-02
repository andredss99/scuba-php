<?php

function crudCreate($user) {
    $usersList = getUsersList();

    $usersList[] = $user;

    $usersList = json_encode($usersList);

    file_put_contents(DATA_LOCATION, $usersList);
}

function getUsersList(): array {
    return json_decode(file_get_contents(DATA_LOCATION));
}