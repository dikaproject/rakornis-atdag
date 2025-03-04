<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agenda;

class AgendaController extends Controller
{
    public function index()
    {
        $agendas = Agenda::all();
        return view('admin.agenda.index', compact('agendas'));
    }

    public function create()
    {
        return view('admin.agenda.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'date' => '',
            'agenda' => 'required',
            'time' => 'required',
        ]);

        Agenda::create($request->all());

        return redirect()->route('admin.agenda.index')
            ->with('success', 'Agenda created successfully.');
    }

    public function edit(Agenda $agenda)
    {
        return view('admin.agenda.edit', compact('agenda'));
    }

    public function update(Request $request, Agenda $agenda)
    {
        $request->validate([
            'date' => '',
            'agenda' => 'required',
            'time' => 'required',
        ]);

        $agenda->update($request->all());

        return redirect()->route('admin.agenda.index')
            ->with('success', 'Agenda updated successfully');
    }

    public function destroy(Agenda $agenda)
    {
        $agenda->delete();

        return redirect()->route('admin.agenda.index')
            ->with('success', 'Agenda deleted successfully');
    }
}
