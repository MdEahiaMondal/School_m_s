<?php

namespace App\Http\Controllers\Backend;

use App\AllClass;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AllClassController extends Controller
{



    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:class show|class create|class edit|class delete', ['only' => ['index','show']]);
        $this->middleware('permission:class create')->only('create');
        $this->middleware('permission:class edit')->only(['edit','update']);
        $this->middleware('permission:class delete')->only('destroy');
    }


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
        $request->validate($this->ClassCreateRules(), $this->setClassErrorMessage());

        AllClass::create($request->all());

        return redirect()->route('all_classes.index')->with('success', 'Class Create Successfully !');
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\AllClass  $allClass
     * @return \Illuminate\Http\Response
     */
    public function show(AllClass $allClass)
    {
        return view('backend.pages.errorPage.404');
    }


    public function edit(AllClass $allClass)
    {
        return view('backend.pages.class.edit', compact('allClass'));
    }


    public function update(Request $request, AllClass $allClass)
    {
        $request->validate($this->ClassUpdateRules($allClass), $this->setClassErrorMessage());

       $allClass->update($request->all());
        return redirect()->route('all_classes.index')->with('success', 'Class Updated Successfully !');
    }


    public function destroy(AllClass $allClass)
    {
       $allClass->delete();
        return redirect()->route('all_classes.index')->with('success', 'Class Deleted Successfully !');
    }



    protected function ClassCreateRules()
    {
        return [
            'name' => 'required|unique:all_classes,name',
            'note' => 'string|nullable'
        ];
    }

    protected function ClassUpdateRules($allClass)
    {
        return [
            'name' => 'required|unique:all_classes,name,'.$allClass->id,
            'note' => 'string|nullable'
        ];
    }

    protected function setClassErrorMessage()
    {
        return [
            'name.required' => 'Name Field also required'
        ];
    }


}
