<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Adviser;

class AdviserController extends Controller
{
    public function index()
    {
        $advisers = Adviser::all();
        return view('advisers.index', compact('advisers'));
    }
    public function create()
    {

        return view('advisers.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();

        Adviser::create($input);
        return redirect('/advisers');
    }

    public function show(Adviser $adviser)
    {
        return view('advisers.show', compact('adviser'));
    }
}
