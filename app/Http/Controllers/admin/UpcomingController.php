<?php

namespace App\Http\Controllers\admin;

use App\Models\Upcoming;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UpcomingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $upcomings = Upcoming::all();

        return view('admin.upcoming.index', compact('upcomings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.upcoming.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image'
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $imageName = $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;
        }

        Upcoming::create($input);

        return redirect('/upcoming')->with('message', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Upcoming $upcoming)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Upcoming $upcoming)
    {
        $upcomings = Upcoming::all();

        return view('admin.upcoming.edit', compact('upcoming'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Upcoming $upcoming)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'image'
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $imageName = $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;
        } else {
            unset($input['image']);
        }

        $upcoming->update($input);

        return redirect('/upcoming')->with('message', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Upcoming $upcoming)
    {
        $upcoming->delete();

        return redirect('/upcoming')->with('message', 'Data berhasil dihapus');
    }
}
