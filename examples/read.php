<?php
require __DIR__ . "/../vendor/autoload.php";

use CoffeeCode\DataLayer\Connect;

/*Comportamento sem abstração*/

//    $conn = Connect::getInstance();
//    $error = Connect::getError();
//
//    if($error){
//        echo $error->getMessage();
//        die();
//    }
//
//    //var_dump(true);
//
//    $query = $conn->query("SELECT * FROM users");
//    var_dump($query->fetchAll());

/*Comportamento com abstração*/

use Source\Models\User;

/*$user = new User();
$list = $user->find()->fetch(true);*/

//var_dump($list);

/** @var $userItem User */

/*foreach ($list as $userItem) {
    //var_dump($userItem);
    var_dump($userItem->data());
    //var_dump($userItem->addresses());
    foreach ($userItem->addresses() as $address) {
        var_dump($address->data());
    }
}*/

$user = new User();

$user->list();
