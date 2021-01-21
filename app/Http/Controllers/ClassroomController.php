<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classroom;

class ClassroomController extends Controller
{
    /**
     * Display a listing of the resource. (Archivio risorse)
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Date from DB

        $classrooms = Classroom::all();
        //dd($classrooms);
        return view('classrooms.index', compact('classrooms'));
    }

    /**
     * Show the form for creating a new resource. (Data entry)
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage. (Salva nuove risorse)
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource. (Mostra la risorsa in base all'id -- DETAIL PAGE)
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)       //Sintassi super compatta --> show(Classroom[modello] $classroom[variabile]) -- non serve l'ID perchè lo cerca dalla rotta
    {
        $classroom = Classroom::find($id);
        //dd($classroom);
        return view('classrooms.show', compact('classroom'));

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
