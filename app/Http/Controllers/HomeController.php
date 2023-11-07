<?php

namespace App\Http\Controllers;

use App\Models\Achievment;
use App\Models\Contact;
use App\Models\Gallery;
use App\Models\Home;
use App\Models\Management;
use App\Models\Ongoing;
use App\Models\Upcoming;
use App\Models\Moment;
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
        $moments = Moment::all();
        $contacts = Contact::first();

        return view('user.landingpage', compact(
            'ongoings',
            'upcomings',
            'moments',
            'contacts'
        ));
    }

    public function prestasi()
    {
        $achievments = Achievment::all();
        $contacts = Contact::first();

        return view('user.prestasi', compact(
            'achievments',
            'contacts'
        ));
    }

    public function gallery()
    {
        $galleries = Gallery::all();
        $contacts = Contact::first();

        return view('user.galeri', compact(
            'galleries',
            'contacts'
        ));
    }

    public function departemen()
    {
        $contacts = Contact::first();
        $managements = Management::all();

        return view('user.departemen', ['contacts' => $contacts, 'managements' => $managements]);
    }

    public function kepengurusan()
    {
        $contacts = Contact::first();
        $managements = Management::all();

        return view('user.kepengurusan', ['contacts' => $contacts, 'managements' => $managements]);
    }
}
