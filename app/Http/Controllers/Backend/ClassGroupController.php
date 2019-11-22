<?php

namespace App\Http\Controllers\Backend;

use App\ClassGroup;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ClassGroupController extends Controller
{


    public function index()
    {
        $class_groups = ClassGroup::latest()->get();
        return view('backend.pages.class_group.index', compact('class_groups'));
    }



    public function create()
    {
        return view('backend.pages.class_group.create');
    }



    public function store(Request $request)
    {

       $request->validate([
           'class_group_name' => 'required|string|max:50',
           'status' => 'nullable|numeric'
       ]);

       ClassGroup::create($request->all());

       return redirect()->route('class_groups.index')->with('success', 'Class group Create Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ClassGroup  $classGroup
     * @return \Illuminate\Http\Response
     */
    public function show(ClassGroup $classGroup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ClassGroup  $classGroup
     * @return \Illuminate\Http\Response
     */
    public function edit(ClassGroup $classGroup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ClassGroup  $classGroup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ClassGroup $classGroup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ClassGroup  $classGroup
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClassGroup $classGroup)
    {
        //
    }
}
