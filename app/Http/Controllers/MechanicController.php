<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mechanic;

class MechanicController extends Controller
{

    public function index()
    {
        $mechanics = Mechanic::all();
        return view('mechanics.index', compact('mechanics'));
    }

    public function create()
    {

        return view('mechanics.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();

        Mechanic::create($input);
        return redirect('/mechanics');
    }

    public function show(Mechanic $mechanic)
    {
        return view('mechanics.show', compact('mechanic'));
    }

    public function edit(Mechanic $mechanic)
    {
        return view('mechanics.edit', compact('mechanic'));
    }

    public function update(Request $request)
    {
        $input = $request->all();

        Mechanic::create($input);
        return redirect('/mechanics');
    }

    public function destroy(Mechanic $mechanic)
    {
        $mechanic->delete();

        return redirect('/mechanics');
    }
}
