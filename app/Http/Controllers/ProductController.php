<?php

namespace App\Http\Controllers;

class ProductController extends Controller
{
    public function index()
    {
        return view('top-up.index');
    }

    public function payment()
    {
        return view('payment.index');
    }
}
