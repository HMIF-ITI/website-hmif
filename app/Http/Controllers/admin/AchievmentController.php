<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Achievment;
use Illuminate\Http\Request;

class AchievmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $achievments = Achievment::all();

        return view('admin.achievment.index', compact('achievments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.achievment.create');
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

        Achievment::create($input);

        return redirect('/admin/achievment')->with('message', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Achievment $achievment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Achievment $achievment)
    {
        $achievments = Achievment::all();

        return view('admin.achievment.edit', compact('achievment'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Achievment $achievment)
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

        $achievment->update($input);

        return redirect('/admin/achievment')->with('message', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Achievment $achievment)
    {
        $achievment->delete();

        return redirect('/admin/achievment')->with('message', 'Data berhasil dihapus');
    }
}
