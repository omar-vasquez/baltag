<?php

namespace App\Http\Controllers\ModuleBicicleta;

use App\Models\MaterialModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\MaterialRequest;

class MaterialController extends Controller
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
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MaterialRequest $MaterialRequest)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ColorModel  $colorModel
     * @return \Illuminate\Http\Response
     */
    public function show(MaterialRequest $MaterialRequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ColorModel  $colorModel
     * @return \Illuminate\Http\Response
     */
    public function edit(MaterialRequest $MaterialRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ColorModel  $colorModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MaterialRequest $MaterialRequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ColorModel  $colorModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(MaterialRequest $MaterialRequest)
    {
        //
    }
}
