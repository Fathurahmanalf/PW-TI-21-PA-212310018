<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('students.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'id' => $request->id,
            'email' => $request->email,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'birth' => $request->tanggallahir,
            'gender' => $request->jeniskelamin,
            'nohp' => $request->telp,
        ];
        Students::create($data);

        return 'hi';
    }

    /**
     * Display the specified resource.
     */
    public function show(Students $students)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Students $students)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Students $students)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Students $students)
    {
        //
    }
}
