<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTemaRequest;
use App\Http\Requests\UpdateTemaRequest;
use App\Models\Tema;
use DateInterval;

class TemaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('temas.index', [
            'temas' => Tema::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('temas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTemaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTemaRequest $request)
    {
        $validados = $request->validated();

        list($hours, $minutes, $seconds) = sscanf($validados['duracion'], '%d:%d:%d');
        $duracion = new DateInterval(sprintf('PT%dH%dM%dS', $hours, $minutes, $seconds));

        $tema = new Tema([
            'titulo' => $validados['titulo'],
            'anyo' => $validados['anyo'],
            'duracion' => $duracion,
        ]);

        $tema->save();

        return redirect()->route('temas.index')
            ->with('success', "Tema $tema->titulo creado correctamente");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tema  $tema
     * @return \Illuminate\Http\Response
     */
    public function show(Tema $tema)
    {
        return view('temas.show', [
            'tema' => $tema,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tema  $tema
     * @return \Illuminate\Http\Response
     */
    public function edit(Tema $tema)
    {
        return view('temas.edit', [
            'tema' => $tema,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTemaRequest  $request
     * @param  \App\Models\Tema  $tema
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTemaRequest $request, Tema $tema)
    {
        $validados = $request->validated();

        list($hours, $minutes, $seconds) = sscanf($validados['duracion'], '%d:%d:%d');
        $duracion = new DateInterval(sprintf('PT%dH%dM%dS', $hours, $minutes, $seconds));

        $tema->titulo = $validados['titulo'];
        $tema->anyo = $validados['anyo'];
        $tema->duracion = $duracion;

        $tema->save();

        return redirect()->route('temas.index')
            ->with('success', "Tema $tema->titulo editado correctamente");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tema  $tema
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tema $tema)
    {
        $tema->delete();

        return redirect()->route('temas.index')
            ->with('success', "Tema $tema->titulo borrado correctamente");
    }
}
