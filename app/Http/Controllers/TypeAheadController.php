<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\TypeAhead;
use Illuminate\Http\Request;

class TypeAheadController extends Controller
{
    function query(Request $request)
    {
        $data = $request->all();

        $query = $data['query'];

        $filter_data = User::select('name')
            ->where('name', 'LIKE', '%' . $query . '%')
            ->get();

        return response()->json($filter_data);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TypeAhead  $typeAhead
     * @return \Illuminate\Http\Response
     */
    public function show(TypeAhead $typeAhead)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TypeAhead  $typeAhead
     * @return \Illuminate\Http\Response
     */
    public function edit(TypeAhead $typeAhead)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TypeAhead  $typeAhead
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TypeAhead $typeAhead)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TypeAhead  $typeAhead
     * @return \Illuminate\Http\Response
     */
    public function destroy(TypeAhead $typeAhead)
    {
        //
    }
}
