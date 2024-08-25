<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRequestUser;
use App\Http\Requests\UpdateRequestUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(Request $request)
    {
        // $users = \App\Models\User::paginate(10);
        $users = DB::table('users')
            ->when($request->input('name'), function ($query, $name) {
                return $query->where('name', 'like', '%' . $name . '%');
            })
            ->orderBy('id', 'desc')
            ->paginate(10);
        return
            view('pages.users.index ', compact('users'));
    }

    public function create()
    {
        return view('pages.users.create');
    }

    public function store(StoreRequestUser $request)
    {
        // dd($request->all());
        $data = $request->all();
        $data['password'] = Hash::make($request->password);
        \App\Models\User::create($data);
        return redirect()->route('user.index')->with('success', 'Data has been created');
    }

    public function edit($id)
    {
        $user = \App\Models\User::find($id);
        return view('pages.users.edit', compact('user'));
    }

    public function update(UpdateRequestUser $request, User $user)
    {
        $data = $request->validated();

        $user->update($data);
        return redirect()->route('user.index')->with('success', 'Data has been updated');
    }

    public function destroy($id)
    {
        $user = \App\Models\User::find($id);
        $user->delete();
        return redirect()->route('user.index')->with('success', 'Data has been deleted');
    }
}
