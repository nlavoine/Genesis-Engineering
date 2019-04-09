<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        /*$user = Auth::user();
        if ($user->role_id == 3) {


            return view('home');
        } else {
            return view('Backoffice.home');
        }*/

        return view('Backoffice.home');

    }

}
