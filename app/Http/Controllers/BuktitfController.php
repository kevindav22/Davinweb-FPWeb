<?php

namespace App\Http\Controllers;

use App\Models\Buktitf;
use Illuminate\Http\Request;

class BuktitfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buktitf = Buktitf::all();
        return view('/admin/buktitf.index',compact('buktitf'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/admin/buktitf.create');
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
            'title' => 'required',  'image' => 'required|image',
        ]);

        $input = $request->all();
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $imageName = $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;
        }
        Buktitf::create($input);

        return redirect('/buktitf')->with('message', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Buktitf  $buktitf
     * @return \Illuminate\Http\Response
     */
    public function show(Buktitf $buktitf)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Buktitf  $buktitf
     * @return \Illuminate\Http\Response
     */
    public function edit(Buktitf $buktitf)
    {
        return view('/admin/buktitf.edit',compact('buktitf'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Buktitf  $buktitf
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Buktitf $buktitf)
    {
        $request->validate([
            'title' => 'required', 'image' => 'image',
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
        $buktitf->update($input);

        return redirect('/buktitf')->with('message', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Buktitf  $buktitf
     * @return \Illuminate\Http\Response
     */
    public function destroy(Buktitf $buktitf)
    {
        $buktitf->delete();
        return redirect('/buktitf')->with('message', 'Data berhasil dihapus');
    }
}
