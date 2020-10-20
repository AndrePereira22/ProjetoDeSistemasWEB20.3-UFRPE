<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\Schedule;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dados = Schedule::all();

        return view('schedule.list', compact('dados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $animais = Animal::all()->where('user_id',Auth::user()->id)->values();
        $services = Service::all();
        return view('schedule.create', compact('animais','services'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $schedule = new Schedule();
        $schedule->create($request->all());
        return redirect()->route("agendas.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $schedule = Schedule::findOrFail($id);
        return view('schedule.show', compact('schedule'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $schedule = Schedule::findOrFail($id);
        $animais = Animal::all();
        $services = Service::all();
        return view('schedule.edit', compact('animais','services','schedule'));


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
        $schedule = Schedule::findOrFail($id);
        $schedule->schedule = $request['schedule'];
        $schedule->date = $request['date'];
        $schedule->reminder = $request['reminder'];
        $schedule->animal_id = $request['animal_id'];
        $schedule->service_id = $request['service_id'];
        $schedule->save();
        flash('Agenda atualizada com Sucesso')->success();
        return redirect()->route("agendas.index");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $schedule  = Schedule::findOrFail($id);
        $schedule ->delete();
        return redirect()->route("agendas.index");
    }
}
