<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    public function showUserTable()
    {
        $users = $this->getAllUsers()->original['users'];
        return view('users.table', compact('users'));
    }
    public function showCreateUsers()
    {
        return view('users.create-user');
    }
    public function showUpdateUser(User $user)
    {
        return view('users.update-user', compact('user'));
    }
    public function getAllUsers()
    {
        $users = User::get();
        return response()->json(['users' => $users], 200);
    }
    public function getUserById(User $user)
    {
        return response()->json(['user' => $user], 200);
    }
    public function saveUser(UserRequest $request)
    {
        $user = new User($request->all());
        $user->save();
        if ($request->ajax()) {
            return response()->json(['newUser' => $user], 201);
        }
        return back()->with('success', 'Usuario creado');
    }
    public function updateUser(User $user, UserRequest $request)
    {
        $allRequest = $request->all();
        if (!$allRequest['password']) unset($allRequest['password']); {
        }
        $user->update($allRequest);
        if ($request->ajax()) {
            return response()->json(['updateUser' => $user->refresh()], 201);
        }
        return back()->with('success', 'Usuario Actualizado');
    }
    public function deleteUser( $user, Request $request)
    {
        $user->delete();
        if ($request->ajax()) {
            return response()->json([], 204);
        }
        return back()->with('success', 'Usuario Eliminado');
    }
}
