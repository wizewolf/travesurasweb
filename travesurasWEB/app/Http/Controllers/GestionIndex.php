<?php

namespace App\Http\Controllers;

use App\Travesuras\Entities\Cliente;
use App\Travesuras\Entities\ClienteToken;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;
use App\Travesuras\Repositories\ClienteRepo;
use App\Travesuras\Repositories\ClienteTokenRepo;
use App\Travesuras\Repositories\imagenGalleryRepo;
use Zip;
use ZanySoft\Zip\ZipManager;
class GestionIndex extends Controller
{
    protected $clienteRepo;
    protected $imageGallery;
    protected $clientetokenrepo;
    /**
     * GestionIndex constructor.
     */
    public function __construct(ClienteRepo $clienteRepo, imagenGalleryRepo $gallery, ClienteTokenRepo $clienteToken){
        $this->clienteRepo=$clienteRepo;
        $this->imageGallery=$gallery;
        $this->clientetokenrepo=$clienteToken;
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
        return View::make('descargarfotos');
    }

    public function comprobarcodigo(){
        $data = (object)Input::all();
        $user = Auth::user()->dni;
        $cliente = $this->clienteRepo->buscarclienteDni($user);
        $token = $this->clientetokenrepo->obtenertoken($cliente->id);
        if($data->codigo == $token->token){
            return "200";

        }else{
            return "400";
        }
    }

    public function mostrarfotos(){
        $client = $this->clienteRepo->buscarclienteDni(Auth::user()->dni);
        $images = $this->imageGallery->fotosdelCliente($client->id);
        return View::make('mostrarfotos',compact('images'));
    }

//https://github.com/Chumper/Zipper
    /*public function descargarZip(){
        $user = Auth::user();
        $client = $this->clienteRepo->buscarclienteDni($user->dni);
        $images = $this->imageGallery->fotosdelCliente($client->id);
        $imgZip = [];
        $manager = new ZipManager();
        $manager ->addZip( Zip::create(Storage::disk('public')->url($user->dni.'.zip')));
        $zip = Zip::create('file.zip');
        foreach ($images as $imagen){
            $zip->add(Storage::disk('publicIMG')->url($imagen->image));
        }
        $zip->close();
        $zip->donwload('zip');
    }*/
}
