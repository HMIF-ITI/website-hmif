<?php

namespace App\Http\Controllers;

use App\Models\Achievment;
use App\Models\Contact;
use App\Models\Gallery;
use App\Models\Home;
use App\Models\Management;
use App\Models\Ongoing;
use App\Models\Upcoming;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ongoings = Ongoing::all();
        $upcomings = Upcoming::all();
        $contacts = Contact::first();

        return view ('user.landingpage', compact(
            'ongoings',
            'upcomings',
            'contacts'
        ));
    }

    public function prestasi()
    {
        $achievments = Achievment::all();
        $contacts = Contact::first();

        return view ('user.prestasi', compact(
            'achievments',
            'contacts'
        ));
    }

    public function gallery()
    {
        $galleries = Gallery::all();
        $contacts = Contact::first();

        return view ('user.galeri', compact(
            'galleries',
            'contacts'
        ));
    }

    public function departemen()
    {
        return view ('user.departemen');
    }

    public function kepengurusan()
    {
        $contacts = Contact::first();

        return view ('user.kepengurusan', compact(
            'contacts'
        ));
    }
}
