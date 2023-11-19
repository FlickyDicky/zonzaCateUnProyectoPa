<?php

namespace App\Http\Controllers;

use App\Models\User;

class AdminController extends Controller
{

    public function deleteUser(User $user)
    {
        if ($user->isAdmin()) {
            abort(403, 'Admin accounts cannot be deleted.');
        }

        $user->delete();

        return redirect()->route('admin.dashboard')->with('success', 'User deleted successfully.');
    }
    
    public function showAllUsers()
{
    $users = User::where('is_admin', false)->get();

    return view('layouts.dashboard', compact('users'));
}
}
