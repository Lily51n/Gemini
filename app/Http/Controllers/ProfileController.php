<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show(User $user)
{
    $followers = $user->followers()->count();
    $following = $user->following()->count();

    return view('profile.show', compact('user', 'followers', 'following'));
}

}
