<?php
/**
 * Created by PhpStorm.
 * User: bulish
 * Date: 29/08/16
 * Time: 12:33
 */

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Contracts\Encryption\DecryptException;
use App\Travesuras\Repositories\AuthRepo;


class ApiAuthController extends Controller{

    protected $authRepo;

    public function __construct(AuthRepo $authRepo){
        $this->authRepo = $authRepo;
    }


    public function index(){
        return view('login1');
    }

    public function store(Request $request){
        $this->validate($request, [
            'email'     => 'required',
            'password'  => 'required'
        ]);
        if(!Auth::attempt($request->only(['email', 'password']))){
            return redirect()->route('login1')->withErrors('No se encontro el usuario');
        }

        return redirect()->route('travesurashome');
    }

    public function getRegister(){
        return View::make('registerTravesuras');
    }

    public function usuarios(){
        $users = $this->authRepo->getUsers();
        return View::make('tableusers', compact('users'));
    }

    public function setRegister(){
        $user = $this->authRepo->newUser();
        $user->user_name = Input::all()['user_name'];
        $user->email = Input::all()['email'];
        $user->dni = Input::all()['dni'];
        $user->user_type = Input::all()['user_type'];
        $user->password = bcrypt(Input::all()['password']);
        $user->save();

        return $user;
    }

    public function setEditUser(){
        $user = User::find(Input::all()['user_id']);
        $user->user_name = Input::all()['user_name'];
        $user->email = Input::all()['email'];
        $user->dni = Input::all()['dni'];
        $user->user_type = Input::all()['user_type'];
        $user->password = bcrypt(Input::all()['passwordNew']);
        $user->save();
        return $user;
    }

    public function logout() {
        if(Auth::check())
            Auth::logout();

        return redirect()->route('travesurashome');
    }

    public function getlogin() {
        if (Auth::check())
        {
            return redirect()->route('home');
        }
        return redirect()->route('login1');
    }

    public function userEdit($id) {
        $user = User::find($id);

        /*$password = Crypt::decrypt($user->password);*/

        return View::make('edituser', compact('user'));
    }

}