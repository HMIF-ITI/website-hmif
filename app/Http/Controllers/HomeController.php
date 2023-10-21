<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('user.landingpage');
    }

    public function prestasi()
    {
        return view ('user.prestasi');
    }

    public function gallery()
    {
        return view ('user.galeri');
    }

    public function departemen()
    {
        return view ('user.departemen');
    }

    public function kepengurusan()
    {
        return view ('user.kepengurusan');
    }
}
