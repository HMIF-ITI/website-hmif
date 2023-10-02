<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Prestasi;
use Illuminate\Http\Request;

class PrestasiController extends Controller
{
    public function index() {
        return view('user.prestasi');
    }
}
