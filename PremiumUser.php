<?php

class PremiumUser extends User
{
    protected function validate(array $user)
    {
        $errors = parent::validate($user);

        if (substr($user['email'], -9) != '@test.com') {
            $errors[] = 'Email должен заканчиваться на @test.com';
        }
        return $errors;
    }
}