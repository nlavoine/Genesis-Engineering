<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('admin.home');
    }

    public function products()
    {
        return view('admin.product.index');
    }

    public function users()
    {
        return view('admin.user.index');
    }

    public function orders()
    {
        return view('admin.order.index');
    }
}
