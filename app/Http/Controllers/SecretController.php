<?php

namespace App\Http\Controllers;

use App\Product;

class SecretController extends Controller
{
    public function index() {
        return view('secret/secret');
    }
}