<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 05/11/15
 * Time: 18:23
 */

namespace App\Travesuras\Entities;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class User extends Model {
    use SoftDeletes;
    protected $table = "users";

    protected $fillable = [
        'id',
        'email',
        'password',
        'social',
        'last_session',
        'user_type',
        'user_name'
    ];
}