<?php

function isEmpty(string $email, string $password)
{
    if (empty($email) || empty($password)) {
        return true;
    } else {
        return false;
    }
}

function isEmailValid(string $email)
{
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}
function isEmailTaken(object $pdo, string $email)
{
    if (getEmail($pdo, $email)) {
        return true;
    } else {
        return false;
    }
}

function isTitleTaken(object $pdo, string $title)
{
    if (getTitle($pdo, $title)) {
        return true;
    } else {
        return false;
    }
}

function isOfficeTitleTaken(object $pdo, string $title)
{
    if (getOffice($pdo, $title)) {
        return true;
    } else {
        return false;
    }
}
