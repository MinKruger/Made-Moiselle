<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::all();

        return view('clients.index')->with('clients', $clients);
    }

    public function create()
    {
        return view('clients.create');
    }

    public function store(Request $request)
    {
        Client::create($request->all());

        return redirect()->route('clients.index');
    }

    public function show($id)
    {
        $client = Client::find($id);

        return view('clients.show')->with('client', $client);
    }

    public function edit($id)
    {
        $client = Client::find($id);

        return view('clients.edit')->with('client', $client);
    }

    public function update(Request $request, $id)
    {
        $client = Client::find($id)->update($request->all());

        return redirect()->route('clients.index');
    }

    public function destroy($id)
    {
        $client = Client::find($id)->delete();

        return redirect()->route('clients.index');
    }
}
