<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getAllUsers()
    {
        $user = User::get();
        return response()->json(['users' => $user], 200);
    }
    public function getUserById()
    {
    }
    public function SaveUser()
    {
    }
    public function UpdateUser()
    {
    }
    public function DeleteUser()
    {
    }
}
