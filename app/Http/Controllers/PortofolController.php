<?php

namespace App\Http\Controllers;

use App\Models\Portofol;
use Illuminate\Http\Request;

class PortofolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portofol = Portofol::all();
        return view('/admin/portofol.index',compact('portofol'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/admin/portofol.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required', 'description' => 'required', 'image' => 'required|image',
        ]);

        $input = $request->all();
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $imageName = $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;
        }
        Portofol::create($input);

        return redirect('/portofol')->with('message', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Portofol  $portofol
     * @return \Illuminate\Http\Response
     */
    public function show(Portofol $portofol)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Portofol  $portofol
     * @return \Illuminate\Http\Response
     */
    public function edit(Portofol $portofol)
    {
        return view('/admin/portofol.edit',compact('portofol'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Portofol  $portofol
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portofol $portofol)
    {
        $request->validate([
            'title' => 'required', 'description' => 'required', 'image' => 'image',
        ]);

        $input = $request->all();
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $imageName = $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;
        }else {
            unset($input['image']);
        }
        $portofol->update($input);

        return redirect('/portofol')->with('message', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portofol  $portofol
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portofol $portofol)
    {
        $portofol->delete();
        return redirect('/portofol')->with('message', 'Data berhasil dihapus');
    }
}
