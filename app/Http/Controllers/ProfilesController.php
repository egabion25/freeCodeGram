<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfilesController extends Controller
{
    public function index($user_id)
    {
        $user = User::findOrFail($user_id);
        // dd(  $user->posts   );
        return view('profiles.index',[
            'user' => $user,
        ]);
    }
}
