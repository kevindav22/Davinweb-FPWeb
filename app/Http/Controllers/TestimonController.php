<?php

namespace App\Http\Controllers;

use App\Models\Testimon;
use Illuminate\Http\Request;

class TestimonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimon = Testimon::all();
        return view('/admin/testimon.index',compact('testimon'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/admin/testimon.create');
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
            'title' => 'required','name'=>'required','gelar'=>'required', 'description' => 'required', 'image' => 'required|image',
        ]);

        $input = $request->all();
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $imageName = $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;
        }
        Testimon::create($input);

        return redirect('/testimon')->with('message', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimon  $testimon
     * @return \Illuminate\Http\Response
     */
    public function show(Testimon $testimon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimon  $testimon
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimon $testimon)
    {
        return view('/admin/testimon.edit',compact('testimon'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimon  $testimon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimon $testimon)
    {
        $request->validate([
            'title' => 'required','name'=>'required','gelar'=>'required', 'description' => 'required', 'image' => 'image',
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
        $testimon->update($input);

        return redirect('/testimon')->with('message', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimon  $testimon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimon $testimon)
    {
        $testimon->delete();
        return redirect('/testimon')->with('message', 'Data berhasil dihapus');
    }
}
