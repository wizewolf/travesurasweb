<?php

namespace App\Http\Controllers;

use App\Travesuras\Entities\Cliente;
use App\Travesuras\Entities\ClienteToken;
use ErrorException;
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
class GestionIndexMobil extends Controller
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

    public function indexmobil(){
        return View::make('loginMobile');
    }

    public function comprobarcodigomobile(){
        try{
            $data = (object)Input::all();
            $user = Auth::user()->dni;
            $cliente = $this->clienteRepo->buscarclienteDni($user);
            $token = (object) $this->clientetokenrepo->obtenertoken($cliente->id);
            if($data->codigo == $token->token){
                return "200";

            }else{
                return "400";
            }
        }catch (ErrorException $e){
            return "300";
        }
    }

    public function mostrarfotosMobile(){
        $client = $this->clienteRepo->buscarclienteDni(Auth::user()->dni);
        $images = $this->imageGallery->fotosdelCliente($client->id);
        return View::make('mostrarfotos',compact('images'));
    }
    public function indexmobilIngresar(){
        return View::make('descargarfotosMobile');
    }

}
