<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\Procedure;
use App\Schedule;

class ScheduleController extends Controller
{
    public function index()
    {
        $schedules = Schedule::all();

        return view('schedules.index')->with('schedules', $schedules);
    }

    public function create()
    {
        $clients = Client::all();

        $procedures = Procedure::all();

        return view('schedules.create')->with('clients', $clients)->with('procedures', $procedures);
    }

    public function store(Request $request)
    {
        Schedule::create($request->all());

        return redirect()->route('schedules.index');
    }

    public function finished($id)
    {
        $schedule = Schedule::find($id)->update(['status' => 1]);

        return redirect()->route('schedules.index');
    }

}
