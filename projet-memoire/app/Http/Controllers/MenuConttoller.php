<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuConttoller extends Controller
{
    public function menu()
    {
        return view ("wellcom.menu.menu");
    }

    public function menufin()
{
    return view ("wellcom.menu.menufin");
}
}



