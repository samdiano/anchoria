<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Landing;

class PagesController extends Controller
{
    /**
     * Show the company's index page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $landing = Landing::find(1);
        return view('index', ['landing' => $landing]);
    }

    /**
     * Show the company's who we are page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function who()
    {
        $landing = Landing::find(1);
        return view('who', ['landing' => $landing]);
    }

}
