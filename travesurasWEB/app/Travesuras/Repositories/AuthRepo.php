<?php
/**
 * Created by PhpStorm.
 * User: bulish
 * Date: 18/11/15
 * Time: 11:37
 */

namespace App\Travesuras\Repositories;
use App\Travesuras\Entities\User;




class AuthRepo {

    public function newUser(){
        return new User();
    }

    public function getUsers(){
        return User::all();
    }


}