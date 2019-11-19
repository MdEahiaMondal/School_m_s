<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Parent\ParentStoreRequest;
use App\Parnt;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;

class ParntController extends Controller
{


    public function index()
    {
        $parents = Parnt::latest()->get();
        return view('backend.pages.parents.index', compact('parents'));
    }


    public function create()
    {
       return view('backend.pages.parents.create');
    }



    public function store(ParentStoreRequest $request)
    {

        $user = User::create([
            'name' => $request->name,
            'email' => $request->name,
            'password' => Hash::make($request->password),
        ]);

        $true = $user->parent()->create($request->all());

        $user->assignRole('parent');

        if ($true)
        {
            return redirect()->route('parent.index')->with('success', 'Parent create Successdully');
        }
        return redirect()->route('parent.index')->with('error', 'Parent does not create !');

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
