<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $dados = Animal::all();

        return view('animal.list', compact('dados'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('animal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $filename = $request['img']->getClientOriginalName();
        $path = $request['img']->storeAs('public', $filename );

        $animal = new Animal();
        $animal->name = $request['name'];
        $animal->sex = $request['sex'];
        $animal->img = $filename;
        $animal->breed = $request['breed'];
        $animal->species = $request['species'];
        $animal->birth = $request['birth'];
        $animal->user_id = $request['user_id'];
        $animal->castration = $request['castration'];
        $animal->save();

        flash('Animal Criado com Sucesso')->success();
        return redirect()->route("animais.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $animal = Animal::findOrFail($id);
        return view('animal.show', compact('animal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $animal = Animal::findOrFail($id);

        return view('animal.edit', compact('animal'));
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
        $animal = Animal::findOrFail($id);
        $animal->name = $request['name'];
        $animal->sex = $request['sex'];
        $animal->breed = $request['breed'];
        $animal->species = $request['species'];
        $animal->birth = $request['birth'];
        $animal->castration = $request['castration'];
        $animal->save();
        flash('Animal atualizado com Sucesso')->success();
        return redirect()->route("animais.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $animal = Animal::findOrFail($id);
        try {
            $animal->delete();
            flash('Animal Excluido com Sucesso')->success();
        }
        catch (QueryException $e) {
            flash('Nao é possivel excluir, animal possui agendamento  ')->error();
        }

        return redirect()->route("animais.index");
    }
}
