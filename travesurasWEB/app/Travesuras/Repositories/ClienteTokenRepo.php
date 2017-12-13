<?php
/**
 * Created by PhpStorm.
 * User: wizerwolf
 * Date: 11/12/2017
 * Time: 03:22
 */

namespace App\Travesuras\Repositories;
use App\Travesuras\Entities\ClienteToken;

class ClienteTokenRepo
{
    public function obtenertoken($id){
        return ClienteToken::where('id_usuario',$id)->first();
    }
}