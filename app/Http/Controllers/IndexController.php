<?php

namespace Harbour\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class IndexController extends Controller
{
    public function containers()
    {
        return View::make('containers');
    }
}
