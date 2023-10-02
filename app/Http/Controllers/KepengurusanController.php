<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KepengurusanController extends Controller
{
    public function index() {
        return view('user.kepengurusan');
    }
}
