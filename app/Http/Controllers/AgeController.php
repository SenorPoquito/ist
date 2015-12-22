<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Age;

class AgeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  int  Age $age
     * @return \Illuminate\Http\Response
     */
    public function show(Age $age)
    {
        //
        $schools = $age->schools;
        return view('schools.index',compact('schools'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  Age $age
     * @return \Illuminate\Http\Response
     */
    public function edit(Age $age)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  Age $age
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Age $age)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  Age $age
     * @return \Illuminate\Http\Response
     */
    public function destroy(Age $age)
    {
        //
    }
}
