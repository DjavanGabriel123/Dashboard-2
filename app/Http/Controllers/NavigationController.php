<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavigationController extends Controller
{
    public function home()
    {
        return view(view: 'site.home');
    }

    public function servicos()
    {
        return view(view: 'site.servicos');
    }

    public function galeria()
    {
        return view(view: 'site.galeria');
    }

    public function contato()
    {
        return view(view: 'site.contato');
    }
}
