<?php

public function login($name, $password)
{
    $I = $this;
    // if snapshot exists - skipping login
    if ($I->loadSessionSnapshot('login')) {
        return;
    }
    // logging in
    $I->amOnPage('/login');
    $I->submitForm('#login', [
        'ryan' => $name,
        'ryan' => $password
    ]);
    $I->see($name);
    // saving snapshot
    $I->saveSessionSnapshot('login');
}