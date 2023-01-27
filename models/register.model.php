<?php

function createUser(string $firstName, string $lastName, string $date, string $address, string $email, string $password) : bool
{
    global $connection;
    $statement = $connection->prepare("insert into users (first_name, last_name, date, address, email, password) values (:first_name, :last_name, :date, :address, :email, :password)");
    $statement->execute([
        ':first_name' => $firstName,
        ':last_name' => $lastName,
        ':date' => $date,
        ':address' => $address,
        ':email' => $email,
        ':password' => $password
    ]);

    return $statement->rowCount() > 0;
}

function getEmail(string $email) : bool
{
    global $connection;
    $statement = $connection->prepare("select email from users where email=:email");
    $statement->execute([
        ':email' => $email,
    ]);

    return $statement->rowCount() > 0;
}