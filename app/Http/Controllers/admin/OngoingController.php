<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Ongoing;
use Illuminate\Http\Request;

class OngoingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ongoings = Ongoing::all();

        return view('admin.ongoing.index', compact('ongoings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.ongoing.create');
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

        Ongoing::create($input);

        return redirect('/ongoing')->with('message', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ongoing $ongoing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ongoing $ongoing)
    {
        $ongoings = Ongoing::all();

        return view('admin.ongoing.edit', compact('ongoing'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ongoing $ongoing)
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

        $ongoing->update($input);

        return redirect('/ongoing')->with('message', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ongoing $ongoing)
    {
        $ongoing->delete();

        return redirect('/ongoing')->with('message', 'Data berhasil dihapus');
    }
}
