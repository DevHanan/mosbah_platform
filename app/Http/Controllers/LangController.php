<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LangController extends Controller
{
    /**
     * Display the language switcher page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('lang.index');
    }

    /**
     * Change the application language.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
}