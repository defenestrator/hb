<?php

namespace Heisen\Http\Controllers\Admin;

use Heisen\SeedPack;
use Heisen\Strain;
use Illuminate\Http\Request;
use Heisen\Http\Controllers\Admin\AdminController;

class SeedPackController extends AdminController
{
    protected $seedPack;

    public function __construct (SeedPack $seedPack)
    {
        $this->seedPack = $seedPack;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $content = $this->seedPack->with('strain')->get();
        return view('seed_packs.list', compact('content'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Strain $strain)
    {
        $strains = $strain->all();
        return view('seed_packs.create', compact('strains'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Heisen\SeedPack  $seedPack
     * @return \Illuminate\Http\Response
     */
    public function edit(SeedPack $seedPack, Strain $strain, $id)
    {
        $content = $seedPack->find($id);
        $strains = $strain->all();
        return view('seed_packs.edit', compact('content', 'strains'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Heisen\SeedPack  $seedPack
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SeedPack $seedPack)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Heisen\SeedPack  $seedPack
     * @return \Illuminate\Http\Response
     */
    public function destroy(SeedPack $seedPack)
    {
        //
    }
}