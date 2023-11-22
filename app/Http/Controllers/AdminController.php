<?php

namespace App\Http\Controllers;

use App\Models\User;
use GuzzleHttp\Psr7\Request;

class AdminController extends Controller
{

    public function showAllUsers()
    {
        $users = User::where('is_admin', false)->get();

        return view('layouts.dashboard', compact('users'));
    }
    public function deleteUser($id)
    {
        $user = User::where('id', $id)->first();
        if ($user->isAdmin()) {
            abort(403, 'Admin accounts cannot be deleted.');
        }

        $user->delete();

        return redirect()->route('dashboard')->with('success', 'User deleted successfully.');
    }
}
