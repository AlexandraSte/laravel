<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public  function page ()
    {
        $data['pages'] = Page::all();
        return view('pages', $data);
    }

}
