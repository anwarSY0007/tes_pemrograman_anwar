<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSelesRequest;
use App\Http\Requests\UpdateSelesRequest;
use App\Models\Seles;

class SelesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('seles');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSelesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Seles $seles)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Seles $seles)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSelesRequest $request, Seles $seles)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Seles $seles)
    {
        //
    }
}
