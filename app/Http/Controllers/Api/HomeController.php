<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function appData(Request $request)
    {
        return $request->__authenticatedApp;
    }
}
