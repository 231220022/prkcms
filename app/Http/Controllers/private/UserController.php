<?php

namespace App\Http\Controllers\Private;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller; // Ensure you extend the base Controller

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('private.users.index', compact('users'));
    }

    public function create()
    {
        return view('private.users.create');
    }

    public function store(UserRequest $request)
    {
        User::create($request->validated());
        return redirect()->route('users.index')->with('success', 'User created successfully.');
    }

    public function show(User $user)
    {
       //
    }

    public function edit(User $user)
    {
        return view('private.users.edit', compact('user'));
    }

    public function update(UserRequest $request, User $user)
    {
        $data = $request->validated();

        if (empty($data['password'])) {
            unset($data['password']);
        }

        $user->update($data);

        return redirect()->route('users.index')->with('success', 'User updated successfully.');
    }
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('success', 'User deleted successfully.');
    }
}
