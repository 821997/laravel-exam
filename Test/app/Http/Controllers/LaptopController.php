<?php

namespace App\Http\Controllers;

use App\laptop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaptopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $laptop=DB::table('laptops')->paginate(5);
        return view('pageslaptop.index',compact('laptop'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pageslaptop.create');
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
            'name'=>'required',
            'type'=>'required',
            'model'=>'required',
            'body'=>'required',
        ]);

        laptop::create($request->all());

        return redirect()->route('laptop.index')->with('success', 'Laptop Created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\laptop  $laptop
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $laptop = laptop::findOrFail($id);
        return view('pageslaptop.show',compact('laptop'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\laptop  $laptop
     * @return \Illuminate\Http\Response
     */
    public function edit(laptop $laptop)
    {
        return view('pageslaptop.update',compact('laptop'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\laptop  $laptop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, laptop $laptop)
    {
        $request->validate([
            'name'=>'required',
            'type'=>'required',
            'model'=>'required',
            'body'=>'required',
        ]);

        $laptop->update($request->all());
        return redirect()->route('laptop.index')->with('success','succss Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\laptop  $laptop
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $laptop=laptop::findOrFail($id);

        $laptop->delete();

        return back();
    }
}
