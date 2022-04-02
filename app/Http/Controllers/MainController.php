<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserInformation;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class MainController extends Controller
{
    public function index(Request $request): View
    {
        return view('welcome');
    }

    public function register(Request $request): RedirectResponse
    {
        /** @var  $user */
        $user = User::create([
            'username' => $request->get('username'),
            'password' => Hash::make($request->get('password'))
        ]);
        $user->information()->create([
            'name' => $request->get('name'),
            'birthday' => $request->date('birthday')
        ]);
        return to_route('home');
    }

    public function profile(int $id)
    {
        $user = User::find($id);
        dd($user->information);
        return \view('profile');
    }
}
