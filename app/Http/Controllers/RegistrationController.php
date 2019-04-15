<?php

namespace App\Http\Controllers;
use App\Http\Requests\RegistrationRequest;
use App\Patients;
use App\User;
use Illuminate\Http\Request;

class RegistrationController extends Controller
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
        $patients = Patients::orderBy('id', 'DESC')->paginate(10);
        return view('registration.index', compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registration.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  RegistrationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegistrationRequest $request)
    {
        Patients::create($request->all());
        return redirect()->route('registration.index');
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
     * @param  \App\Patients $patient
     * @return \Illuminate\Http\Response
     */
    public function edit(Patients $patient)
    {
        return view('registration.edit', compact('patient'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  RegistrationRequest  $request
     * @param  Patients $patient
     * @return \Illuminate\Http\Response
     */
    public function update(RegistrationRequest $request, Patients $patient)
    {
        $patient->update($request->all());
        return redirect()->route('registration.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Patients $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patients $patient)
    {
        $patient->delete();
        return redirect()->route('registration.index');
    }
}
