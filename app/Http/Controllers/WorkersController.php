<?php

namespace App\Http\Controllers;

use App\Http\Requests\WorkersRequest;
use App\Workers;
use App\User;
use Illuminate\Http\Request;

class WorkersController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $workers = Workers::all();
        return view('workers.index', compact('workers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('workers.create', compact('workers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  WorkersRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(WorkersRequest $request)
    {
        Workers::create($request->all());
        return redirect()->route('workers.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Workers $worker
     * @return \Illuminate\Http\Response
     */
    public function edit(Workers $worker)
    {
        return view('workers.edit', compact('worker'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  WorkersRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(WorkersRequest $request, Workers $worker)
    {
        $worker->update($request->all());
        return redirect()->route('workers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Workers $worker
     * @return \Illuminate\Http\Response
     */
    public function destroy(Workers $worker)
    {
        $worker->delete();
        return redirect()->route('workers.index');
    }
}
