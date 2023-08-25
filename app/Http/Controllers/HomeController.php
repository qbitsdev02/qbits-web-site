<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Cache;
use App;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index');
    }
    
    public function about()
    {
        return view('about');
    }

    public function changeLang($locale) 
     {
        session()->put('locale', $locale);
        return Redirect::back();
     }
}
