<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class User extends DataLayer
{
    public function __construct()
    {
        //string $entity, array $required, string $primary = 'id', bool $timestamps = true
        parent::__construct("users", ["first_name", "last_name"]);
    }

    public function bootstrap(string $first_name, string $last_name, string $genre): User {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->genre = $genre;
        return $this;
    }

    public function createUser($data): bool
    {
        return $this->save();
    }

    public function deleteUser(): bool
    {
        return $this->destroy();
    }

    public function updateUser(): bool
    {
        return $this->save();
    }

    public function list()
    {
       $users = $this->find()->fetch(true);

        foreach ($users as $user){
            var_dump($user->data());
        }
    }

    public function addresses()
    {
        return (new Address())->find("user_id = :id", "id={$this->id}")->fetch(true);
    }
}