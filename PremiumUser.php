<?php
/**
 * Created by PhpStorm.
 * User: BKN1402
 * Date: 14.11.2017
 * Time: 20:35
 */

class PremiumUser extends User
{
    protected function validate(array $user)
    {
        $errors = parent::validate($user);

        if ( substr($user['email'], -9) != '@test.com') {
            $errors[] = 'Email must have @test.com';
        }

        return $errors;
    }


}