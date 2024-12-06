<?php

namespace App\Http\Controllers;

use App\Models\Universitas;
use Illuminate\Http\Request;

class UniversitasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($slug)
    {
        $universitas = Universitas::with('fakultas')->where('slug', $slug)->firstOrFail();

        $faculties = $universitas->fakultas->pluck('name')->toArray();

        if (!$universitas) {
            abort(404, 'Universitas tidak ditemukan');
        }

        return view('univ', compact('universitas', 'faculties'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
