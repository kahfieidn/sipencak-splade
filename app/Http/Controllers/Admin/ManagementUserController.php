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
            'users' =>  Users::class
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request, Periode $year)
    {
        //
        $role = Role::where('name', 'user')->get();

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
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required',
        ]);

        $user = User::create([
            'name' => $request->name,
            'nip' => $request->nip,
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
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
    public function show()
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, Periode $year, User $user)
    {
        //
        $role = Role::where('name', 'user')->get();

        return view('admin.management_user.edit', [
            'year' => $year,
            'user' => $user,
            'role' => $role
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Periode $year, User $user)
    {
        //
        $request->validate([
            'name' => $request->user['name'],
            'nip' => $request->user['nip'],
            'username' => $request->user['username'],
            'email' => $request->user['email'],
        ]);

        if ($request->password != null) {
            $user->update([
                'name' => $request->user['name'],
                'nip' => $request->user['nip'],
                'username' => $request->user['username'],
                'email' => $request->user['email'],
                'password' => bcrypt($request->password),
            ]);
        }else{
            $user->update([
                'name' => $request->user['name'],
                'nip' => $request->user['nip'],
                'username' => $request->user['username'],
                'email' => $request->user['email'],
            ]);
        }

        Toast::title('Data berhasil di Simpan!')
            ->rightBottom()
            ->autoDismiss(10);
        return to_route('administrator.management_user.index', $year);
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
