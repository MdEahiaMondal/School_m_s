<?php

namespace App\Http\Controllers\Backend;

use App\Parnt;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ParntController extends Controller
{


    public function index()
    {
        $parents = Parnt::latest()->get();
        return view('backend.pages.parents.index', compact('parents'));
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
     * @param  \App\Parnt  $parnt
     * @return \Illuminate\Http\Response
     */
    public function show(Parnt $parnt)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Parnt  $parnt
     * @return \Illuminate\Http\Response
     */
    public function edit(Parnt $parnt)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Parnt  $parnt
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Parnt $parnt)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Parnt  $parnt
     * @return \Illuminate\Http\Response
     */
    public function destroy(Parnt $parnt)
    {
        //
    }
}
