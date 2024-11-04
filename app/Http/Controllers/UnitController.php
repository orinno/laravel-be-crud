<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    //get all
    public function index()
    {
        $units = Unit::all();
        return response()->json($units);
    }

    //create
    public function store(Request $request)
    {
        $unit = Unit::create($request->all());
        return response()->json($unit);
    }

    //get one
    public function show($id)
    {
        $unit = Unit::find($id);
        return response()->json($unit);
    }

    //update
    public function update(Request $request, $id)
    {
        $unit = Unit::find($id);
        $unit->update($request->all());
        return response()->json($unit);
    }

    //delete
    public function destroy($id)
    {
        $unit = Unit::find($id);
        $unit->delete();
        return response()->json($unit);
    }
}
