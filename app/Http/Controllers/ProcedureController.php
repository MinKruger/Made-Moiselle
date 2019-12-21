<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Procedure;

class ProcedureController extends Controller
{
    public function index()
    {
        $procedures = Procedure::all();

        return view('procedures.index')->with('procedures', $procedures);
    }

    public function create()
    {
        return view('procedures.create');
    }

    public function store(Request $request)
    {
        Procedure::create($request->all());

        return redirect()->route('procedures.index');
    }

    public function show($id)
    {
        $procedure = Procedure::find($id);

        return view('procedures.show')->with('procedure', $procedure);
    }

    public function edit($id)
    {
        $procedure = Procedure::find($id);

        return view('procedures.edit')->with('procedure', $procedure);
    }

    public function update(Request $request, $id)
    {
        $procedure = Procedure::find($id)->update($request->all());

        return redirect()->route('procedures.index');
    }

    public function destroy($id)
    {
        $procedure = Procedure::find($id)->delete();

        return redirect()->route('procedures.index');
    }
}
