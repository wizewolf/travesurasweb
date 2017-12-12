<?php

namespace App\Http\Controllers;

use App\Travesuras\Entities\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\View;
use App\Travesuras\Repositories\ClienteRepo;
use App\Travesuras\Repositories\imagenGalleryRepo;
class GestionIndex extends Controller
{
    protected $clienteRepo;
    protected $imageGallery;
    /**
     * GestionIndex constructor.
     */
    public function __construct(ClienteRepo $clienteRepo, imagenGalleryRepo $gallery){
        $this->clienteRepo=$clienteRepo;
        $this->imageGallery=$gallery;
    }

    public function index(){
        return View::make('indexgestio');
    }
    public function buscarCliente(){
        return View::make('buscarcliente');
    }
    public function cliente(){
        $data = (object) Input::all();
        $client = $this->clienteRepo->buscarclienteDni($data->dni);
        $clienteID = $client->id;
        return $clienteID;
    }

    public function clientegaleria($id)
    {

        $client = $this->clienteRepo->buscarclienteID($id);
        $images = $this->imageGallery->fotosdelCliente($id);
        return View::make('subirfotos',compact('client','images'));
    }

    public function descargarfoto(){
        $client = $this->clienteRepo->buscarclienteDni(Auth::user()->dni);
        $images = $this->imageGallery->fotosdelCliente($client->id);
        return View::make('descargarfotos',compact('client','images'));
    }
//https://github.com/Chumper/Zipper
}
