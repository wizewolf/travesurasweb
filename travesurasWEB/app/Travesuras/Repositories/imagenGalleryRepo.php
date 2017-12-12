<?php
/**
 * Created by PhpStorm.
 * User: wizerwolf
 * Date: 11/12/2017
 * Time: 03:22
 */

namespace App\Travesuras\Repositories;
use App\Travesuras\Entities\Cliente;
use App\Travesuras\Entities\ImageGallery;

class imagenGalleryRepo
{
    public function fotosdelCliente($idCliente)
    {
        return ImageGallery::where('id_usuario',$idCliente)->get();
    }
}