<?php

namespace App\Http\Controllers\Backend;

use App\AllClass;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AllClassController extends Controller
{


    public function index()
    {
        $classes = AllClass::latest()->get();
       return view('backend.pages.class.index', compact('classes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('backend.pages.class.create');
    }


    public function store(Request $request)
    {
        AllClass::create([
            'name' => $request->name,
            'note' => $request->note,
        ]);
        return redirect()->route('class.index')->with('success', 'Class Create Successfully !');
    }




    /**
     * Display the specified resource.
     *
     * @param  \App\AllClass  $allClass
     * @return \Illuminate\Http\Response
     */
    public function show(AllClass $allClass)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AllClass  $allClass
     * @return \Illuminate\Http\Response
     */
    public function edit(AllClass $allClass)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AllClass  $allClass
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AllClass $allClass)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AllClass  $allClass
     * @return \Illuminate\Http\Response
     */
    public function destroy(AllClass $allClass)
    {
        //
    }
}
