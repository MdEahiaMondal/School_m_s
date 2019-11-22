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
           'class_group_name' => 'required|string|max:50|unique:class_groups,class_group_name,',
           'status' => 'nullable|numeric'
       ]);

       ClassGroup::create($request->all());

       return redirect()->route('class_groups.index')->with('success', 'Class group Create Successfully');

    }


    public function show(ClassGroup $classGroup)
    {
        return view('backend.pages.errorPage.404');
    }



    public function edit(ClassGroup $classGroup)
    {
       return view('backend.pages.class_group.edit', compact('classGroup'));
    }


    public function update(Request $request, ClassGroup $classGroup)
    {
        $request->validate([
            'class_group_name' => 'required|string|max:50|unique:class_groups,class_group_name,'.$classGroup->id,
            'status' => 'nullable|numeric'
        ]);


        $classGroup->update($request->all());
        return redirect()->route('class_groups.index')->with('success', 'Class group Updated Successfully');

    }



    public function destroy(ClassGroup $classGroup)
    {
        $classGroup->delete();
        return redirect()->route('class_groups.index')->with('success', 'Class group Deleted Successfully');

    }
}
