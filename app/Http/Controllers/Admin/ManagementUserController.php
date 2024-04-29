<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Periode;
use App\Tables\Admin\Users;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use ProtoneMedia\Splade\Facades\Toast;

class ManagementUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, Periode $year)
    {
        return view('admin.management_user.index', [
            'year' => $year,
            'users' =>  new Users($year)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request, Periode $year)
    {
        //
        $role = Role::all();
        return view('admin.management_user.create', [
            'year' => $year,
            'role' => $role
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Periode $year)
    {
        //
        $request->validate([
            'name' => 'required',
            'nip' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required',
        ]);

        $user = User::create([
            'name' => $request->name,
            'nip' => $request->nip,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'year' => '2024'
        ]);
        $user->assignRole(2);


        Toast::title('Data berhasil di Simpan!')
        ->rightBottom()
        ->autoDismiss(10);
        return to_route('administrator.management_user.index', $year);

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
    public function destroy(Periode $year, User $user)
    {
        //
        $user->delete();
        
        Toast::title('User berhasil di hapus!')
            ->rightBottom()
            ->autoDismiss(10);
        return back();

    }
}
