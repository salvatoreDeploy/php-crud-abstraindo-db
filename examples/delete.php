<?php
require __DIR__ . "/../vendor/autoload.php";

use Source\Models\User;

$user = (new User())->findById(2);

/*if ($user) {
    $user->destroy();
} else {
    var_dump($user);
}*/

/*Comportamento com abstração*/

if ($user) {
    $user->deleteUser();
} else {
    var_dump($user);
}
