<?php

namespace App\Http\Controllers;

use App\Models\Presenior;
use App\Models\User;

use Illuminate\Http\Request;

class PreinscriptionController extends Controller
{
    function optimiser(object $ch, string $name): string
    {
        $imageName = $name .time() . '.' . $ch->extension();
        $ch->move(public_path('assets/images/produits'), $imageName);
        return $imageName;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $senior=Presenior::all();

        return view('pre.index', compact('senior'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pre.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $senior=new Presenior();

        $senior->  name = $request->input('name');
        $senior->  email = $request->input('email');
        $senior->  nationalite = $request->input('nationalite');
        $senior->  password = $request->input('password');
        $senior->  confirm = $request->input('confirm');
        $senior->  cin = $request->input('cin');
        $senior->  document = $request->input('document');
        $senior->  dateobtention = $request->input('dateobtention');



        $senior->save();

        return redirect()->route('home.pre');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
