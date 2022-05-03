<?php

namespace App\Http\Controllers;

use App\Models\Shark;
use Illuminate\Http\Request;
use App\Http\Requests\storeSharkRequest;

class SharkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $sharks=Shark::all();
        return view('sharks.index',compact('sharks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('sharks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(storeSharkRequest $request)
    {
        //
        Shark::create($request->validated());
        return redirect()->route('sharks.index')->with('message','Shark created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Shark  $shark
     * @return \Illuminate\Http\Response
     */
    public function show(Shark $shark)
    {
        //
        return view('sharks.show',compact('shark'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Shark  $shark
     * @return \Illuminate\Http\Response
     */
    public function edit(Shark $shark)
    {
        //
        return view('sharks.edit',compact('shark'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Shark  $shark
     * @return \Illuminate\Http\Response
     */
    public function update(storeSharkRequest $request, Shark $shark)
    {
        //
        // dd('update');
        $shark->update($request->validated());
        return redirect()->route('sharks.index')->with('message','Shark updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Shark  $shark
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shark $shark)
    {
        //
        $shark->delete();
        return redirect()->route('sharks.index')->with('message','Shark deleted successfully!');
    }
}
