<?php
/**
 * Created by PhpStorm.
 * User: wizerwolf
 * Date: 11/12/2017
 * Time: 03:22
 */

namespace App\Travesuras\Repositories;
use App\Travesuras\Entities\Cliente;

class ClienteRepo
{
    public function buscarclienteDni($dni){
        return Cliente::where('dni',$dni)->first();
    }
    public function buscarclienteID($id){
        return Cliente::find($id);
    }
}