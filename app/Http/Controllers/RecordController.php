<?php

namespace App\Http\Controllers;

use App\Record;
use Illuminate\Http\Request;

class RecordController extends Controller
{
    public function index()
    {
        $records = Record::all();
        return view('backend.record.all-record', compact('records'));
    }




    public function create()
    {
        return view('backend.record.create-record');
    }



    public function store(Request $request)
    {
        $request->validate([
            'name'         => 'required'
        ]);

        $record = new Record();
        $record->name        = $request->name;
        $record->address     = $request->address;
        $record->amount      = $request->amount;

        $record->save();
        //dd($request->all());
        return redirect('record/create')->with('successMsg', 'New record added successfully!');
    }



    public function show($id)
    {
        //
    }



    public function edit($id)
    {
        //
    }



    public function update(Request $request, $id)
    {
        //
    }




    public function destroy($id)
    {
        //
    }
}
