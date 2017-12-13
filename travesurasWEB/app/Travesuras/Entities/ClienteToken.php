<?php
/**
 * Created by PhpStorm.
 * User: wizerwolf
 * Date: 11/12/2017
 * Time: 03:22
 */

namespace App\Travesuras\Entities;


use Illuminate\Database\Eloquent\Model;

class ClienteToken extends Model
{
    protected $table = "clientetoken";

    protected $fillable = [
        'id',
        'id_usuario',
        'token'
    ];
}