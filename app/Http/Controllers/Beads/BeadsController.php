<?php

namespace App\Http\Controllers\Beads;

use App\userFavorites;
use Illuminate\Http\Request;

use App\Beads;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

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
     * Display the specified bead.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        $bead = Beads::findOrFail($id);

        //update the image to contain the full link
        $bead->image_file = 'assets/delica11/'.$bead->image_file.'.jpg';

        //get a list of the finishes
        $finish = $bead->finishes->lists('name');

        //get a list of the favorites


        //return $finish;
        return view('beads.single_bead')->with('bead', $bead);
    }


    /**
     * Show the specification for all the beads in the db
     * @return $this
     */
    public function getBeads()
    {

        $beads = Beads::all();

        //update the returned image file to include the full path
        foreach ($beads as $single_bead) {
            $single_bead->image_file = 'assets/delica11/' . $single_bead->image_file . '.jpg';
           // dd($single_bead);
        }
        return view('beads.beads')->with('beads', $beads);
    }

    public function addFavorites()
    {
      //  dd(Auth::user()->id);
        $favorites = new userFavorites();

        $favorites->users_id = Auth::user()->id;
        //dd($favorites);
       // dd(Input::get());
        $favorites->beads_id = Input::get('bead_id');

        //$favorites;
        $favorites->save();
        //dd(Auth::user()->id);
        //dd(Input::get('bead_id'));
        //dd($this);
        return redirect('beads');
    }

}
