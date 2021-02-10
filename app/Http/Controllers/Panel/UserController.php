<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Hekmatinasser\Verta\Verta;
use Illuminate\Validation\Rule;
class UserController extends Controller
{

    public function index()
    {
        $users = User::all();
        return view('panel.users.index',compact('users'));
    }


    public function create()
    {
        return view('panel.users.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required','string','max:255'],
            'email' => ['required','string','email','max:255','unique:users'],
            'mobile' => ['required','string','max:15','unique:users'],
            'role' => ['required','max:20']
        ]);
        $data = $request->only('name', 'email', 'mobile', 'role');
        $data['password'] = Hash::make('password');
        User::create($data);
        return redirect()->route('users.index');
    }

    public function show($id)
    {
        //
    }

    public function edit(User $user)
    {
        return view('panel.users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
            'mobile' => ['required', 'string', 'max:15', Rule::unique('users')->ignore($user->id)],
            'role' => ['required', 'max:20'],
        ]);
        $user->update(
            $request->only('name', 'email', 'mobile', 'role')
        );
        return redirect()->route('users.index');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return back();
    }
}
