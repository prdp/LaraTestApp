<?php

namespace app\Http\Controllers;

use Illuminate\Http\Request;

use app\Http\Requests;
use app\Http\Controllers\Controller;

class PagesController extends Controller
{

    public function home()
    {
        return view('pages.home');
    }




}
