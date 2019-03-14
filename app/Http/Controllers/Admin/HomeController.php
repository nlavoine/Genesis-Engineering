<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
        return view('admin.index');
    }

    public function products(){
        return view('admin.products');
    }

    public function users(){
        return view('admin.users');
    }

    public function orders(){
        return view('admin.orders');
    }
}
