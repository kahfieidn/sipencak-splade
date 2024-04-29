<?php

namespace App\Http\Controllers;

use App\Models\Periode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PreLifecycleController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $periode = Periode::all()->sortBy('year');;
        return view('pre_lifecycle.index', [
            'periode' => $periode
        ]);
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
        $roles = Auth::user()->roles->pluck('name')->first();
        if($roles == 'admin'){
            return redirect(route('administrator.dashboard', $request->only('year')));
        }else if($roles == 'user'){
            return redirect(route('user.dashboard', $request->only('year')));
        }
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
