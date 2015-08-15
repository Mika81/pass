<?php

$lenght = (string) $_POST[nbr_de_caracteres];

if (isset($lenght)) {
    $newPassword = new classes\Password();
    $create_new_password = $newPassword->create_password($lenght);
    $new_password = $create_new_password;
}
