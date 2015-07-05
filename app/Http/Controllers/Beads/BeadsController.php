<?php

namespace App\Http\Controllers\Beads;

use Illuminate\Http\Request;

use App\Beads;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class BeadsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        $bead = Beads::findOrFail($id);

        //update the image to contain the full link
        $bead->image_file = 'assets/delica11/'.$bead->image_file.'.jpg';
        return view('beads.single_bead')->with('bead', $bead);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {

    }

    /**     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

    public function getBeads()
    {

        $beads = Beads::all();

        //update the returned image file to include the full path
        foreach ($beads as $single_bead)
            $single_bead->image_file = 'assets/delica11/'.$single_bead->image_file.'.jpg';

        return view('beads.beads')->with('beads', $beads);
    }

}
