<?php

namespace App\Http\Controllers;

use App\Models\Deskripsi;
use Illuminate\Http\Request;

class DeskripsiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $deskripsi = Deskripsi::first();

        return view('/admin/deskripsi', compact('deskripsi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Deskripsi  $deskripsi
     * @return \Illuminate\Http\Response
     */
    public function show(Deskripsi $deskripsi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Deskripsi  $deskripsi
     * @return \Illuminate\Http\Response
     */
    public function edit(Deskripsi $deskripsi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Deskripsi  $deskripsi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $deskripsi = Deskripsi::find($id);

        $request->validate([
            'tentang' => 'required',
            'subjudulunggul' => 'required',
            'keunggulan' => 'required',
            'service' => 'required',
            'team' => 'required',
            'portofolio' => 'required',
        ]);

        $input = $request->all();

        if ($image = $request->file('bgtentang')) {
            $destinationPath = 'image/';
            $imageName = $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $input['bgtentang'] = $imageName;
        }else {
            unset($input['bgtentang']);
        }

        if ($image = $request->file('imgtentang')) {
            $destinationPath = 'image/';
            $imageName = $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $input['imgtentang'] = $imageName;
        }else {
            unset($input['imgtentang']);
        }

        if ($image = $request->file('imgservice')) {
            $destinationPath = 'image/';
            $imageName = $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $input['imgservice'] = $imageName;
        }else {
            unset($input['imgservice']);
        }

        $deskripsi->update($input);

        return redirect('/deskripsi')->with('message', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Deskripsi  $deskripsi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Deskripsi $deskripsi)
    {
        //
    }
}
