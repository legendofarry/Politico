<?php
declare(strict_types=1);

function userverify(string $email, string $password)
{
    if (empty($email) || empty($password)) {
        return true;
    } else {
        return false;
    }
}

function verifyEmail(bool|array $result)
{
    if (!$result) {
        return true;
    } else {
        return false;
    }
}

function verifyPassword(string $password, string $passHash)
{
    if (!password_verify($password, $passHash)) {
        return true;
    } else {
        return false;
    }
}