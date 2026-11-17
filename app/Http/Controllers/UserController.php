<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;

class UserController extends Controller
{
    public function index(){
        $users = User::latest()->paginate(10);

        // Kirim variabel $users ke view 'about'
        return view('about', compact('users'));
    }
    public function show(string $id): View
    {
        return view('user.profile', [
            'user' => User::findOrFail($id)
        ]);
    }

    /* public function view('user.profile', [
        'user' => User::findOrFail($id)
    ]); */
}
