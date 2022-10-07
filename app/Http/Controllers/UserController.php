<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\DB;

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
        // $users = User::with('roles:id,name')->get();
        $users = User::get();
        return response()->json(['users' => $users], 200);
    }


    public function getUserById(User $user)
    {
        return response()->json(['user' => $user], 200);
    }


    public function saveUser(UserRequest $request)
    {
        try {
            DB::beginTransaction();
            $user = new User($request->all());
            $user->save();

            DB::commit();
            if ($request->ajax()) {
                return response()->json(['newUser' => $user], 201);
            }
            return back()->with('success', 'Usuario creado');
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }

    }


    public function updateUser(Request $request, User $user )
    {
        $user->update($request->all());
        return response()->json(['updateUser' => $user->refresh()], 201);
    }

    public function deleteUser(User $user, Request $request)
    {
        $user->delete();
        if ($request->ajax()) {
            return response()->json([], 204);
        }
    }


}
