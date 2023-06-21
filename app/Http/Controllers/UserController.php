<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function getUser(User $user)
    {
        $dataUsers = $user->paginate(10);
        return view('user.viewUser', compact('dataUsers'));
    }
}
