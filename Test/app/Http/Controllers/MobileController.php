<?php

namespace App\Http\Controllers;

use App\Mobile;
use Illuminate\Http\Request;

use DB;

use Alert;
use function Sodium\compare;


class MobileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mobile = DB::table('mobiles')->paginate(5);
        return view('pagesmobile.index', compact('mobile'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('pagesmobile.create');
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

        ]);

       Mobile::create($request->all());



        return redirect(route('mobile.index'))->with('success', 'Mobile Saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mobile  $mobile
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mobile= Mobile::findOrFail($id);

        return view('pagesmobile.show',compact('mobile'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mobile  $mobile
     * @return \Illuminate\Http\Response
     */
    public function edit(Mobile $mobile)
    {
        return view('pagesmobile.update', compact('mobile'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mobile  $mobile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mobile $mobile)
    {
        $request->validate([
            'name'=>'required',
            'type'=>'required',

        ]);

        $mobile->update($request->all());

        return redirect(route('mobile.index'))->with('alert', 'Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mobile $mobile
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy($id)
    {
        $mobile=Mobile::findOrFail($id);

        $mobile->delete();


        return back()->with('success', 'Mobile Delete!');


    }
}
