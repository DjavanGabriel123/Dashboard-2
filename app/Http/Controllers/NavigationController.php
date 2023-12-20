<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavigationController extends Controller
{
    public function home()
    {
        return view(view: 'Site.home');
    }

    public function servicos()
    {
        return view(view: 'Site.servicos');
    }

    public function galeria()
    {
        return view(view: 'Site.galeria');
    }

    public function contato()
    {
        return view(view: 'Site.contato');
    }
}
