<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Moment;
use Illuminate\Http\Request;

class MomentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $moments = Moment::all();

        return view('admin.moment.index', compact('moments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.moment.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'divisi' => 'required',
            'image' => 'required|image'
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $imageName = $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;
        }

        Moment::create($input);

        return redirect('/admin/moment')->with('message', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Moment $moment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Moment $moment)
    {
        $moments = Moment::all();

        return view('admin.moment.edit', compact('moment'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Moment $moment)
    {
        $request->validate([
            'divisi' => 'required',
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

        $moment->update($input);

        return redirect('/admin/moment')->with('message', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Moment $moment)
    {
        $moment->delete();

        return redirect('/admin/moment')->with('message', 'Data berhasil dihapus');
    }
}
