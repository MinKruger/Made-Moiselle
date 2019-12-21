<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class ProfileController extends Controller
{
    public function edit($id)
    {
        $user = Auth::user();

        return view('profile.edit')->with('user', $user);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $data['password'] = bcrypt($data['password']);

        $user = Auth::user()->update($data);

        return redirect()->back();
    }
}
