<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Szakdoga;
use Illuminate\Http\Request;

class SzakdogaController extends Controller
{
    public function index()
    {
        $szakdogak=Szakdoga::all();
        return $szakdogak;
    }

    public function show($id)
    {
        $szakdoga = Szakdoga::find($id);
        return $szakdoga;
    }

    public function store(Request $request)
    {
        $szakdoga= new Szakdoga();
        $szakdoga->szakdoga_nev = $request->szakdoga_nev;
        $szakdoga->githublink = $request->githublink;
        $szakdoga->oldalink = $request->oldalink;
        $szakdoga->tagokneve = $request->tagokneve;
        $szakdoga->save();
    }

    public function update(Request $request)
    {
        $szakdoga= new Szakdoga();
        $szakdoga->szakdoga_nev = $request->szakdoga_nev;
        $szakdoga->githublink = $request->githublink;
        $szakdoga->oldalink = $request->oldalink;
        $szakdoga->tagokneve = $request->tagokneve;
        $szakdoga->save();
    }

    public function destroy($id)
    {
        SzakdogaController::show($id)->delete();
    }
}
