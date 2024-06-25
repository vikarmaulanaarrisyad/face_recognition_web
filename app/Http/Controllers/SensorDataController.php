<?php

namespace App\Http\Controllers;

use App\Models\SensorData;
use Illuminate\Http\Request;

class SensorDataController extends Controller
{
    public function data()
    {
        $result = SensorData::all();
        return datatables($result)
            ->addIndexColumn()
            ->editColumn('created_at', function ($row) {
                return $row->created_at->format('d-m-Y H:i:s');
            })
            ->escapeColumns([])
            ->make(true);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        SensorData::create($request->all());

        return response()->json(['message' => 'Data berhasil disimpan',], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(SensorData $sensorData)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SensorData $sensorData)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SensorData $sensorData)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SensorData $sensorData)
    {
        //
    }
}
