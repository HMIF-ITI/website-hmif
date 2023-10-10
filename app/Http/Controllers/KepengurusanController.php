<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Kepengurusan;
use Illuminate\Http\Request;

class KepengurusanController extends Controller
{
    public function index() {
        return view('user.kepengurusan');
    }
}
