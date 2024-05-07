<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Periode;
use App\Models\Program;
use App\Models\Kegiatan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use ProtoneMedia\Splade\SpladeTable;

class ManagementKegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, Periode $year)
    {
        //
        $users = User::all();
        return view('admin.management_kegiatan.index', [
            'year' => $year,
            'programs' => SpladeTable::for(Program::query()->with('kegiatan')->orderBy('created_at', 'asc'))
            ->column('Kode')
            ->column('Nama Kegiatan')
            ->column('Status Kegiatan')
            ->column('Actions')
            ->withGlobalSearch(columns: ['kegiatan.nama_kegiatan'])
            ->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request, Periode $year)
    {
        //
        $programs = Program::all();
        return view('admin.management_kegiatan.create', [
            'year' => $year,
            'key' => $request->key,
            'programs' => $programs,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Periode $year)
    {
        //
        if($request->has('Program')){
            $request->validate([
                'kode' => 'required',
                'nama_program' => 'required',
                'status' => 'required',
            ]);
            Program::create([
                'kode' => $request->kode,
                'nama_program' => $request->nama_program,
                'status' => $request->status,
                'periode_id' => $year->id,
            ]);
            return back();
        }else if($request->has('Kegiatan')){
            $request->validate([
                'kode' => 'required',
                'program_id' => 'required',
                'nama_kegiatan' => 'required',
                'status' => 'required',
            ]);
            Kegiatan::create([
                'kode' => $request->kode,
                'nama_kegiatan' => $request->nama_kegiatan,
                'status' => $request->status,
                'program_id' => $request->program_id,
            ]);
            return back();
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
