<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Establishment;

use App\Http\EstablishmentRequest;

class EstablishmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $establishments = Establishment::all();

        return view('establishments.index',['establishments' => $establishments]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('establishments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EstablishmentRequest $request)
    {
        $data = $request->validated();
        //dd($data);
        Establishment::create($data);

        return redirect()->route('establishments.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Establishment $establishment)
    {
        return view('establishments.show',['establishment' => $establishment]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Establishment $establishment)
    {
        return view('establishments.edit',['establishment' => $establishment]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Establishment $establishment)
    {
        $data = $request->all();
        //dd($data);
        $establishment->update($data);

        return redirect()->route('establishments.index',$establishment->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Establishment $establishment)
    {
        $establishment->delete();

        return redirect()->route('establishments.index');
    }
}
