<?php

namespace App\Http\Controllers;

class ProductController extends Controller
{
    public function topUpIndex()
    {
        return view('top-up.index');
    }

    public function buyAccountIndex()
    {
        return view('buy-account.index');
    }

    public function payment()
    {
        return view('top-up.payment');
    }
}
