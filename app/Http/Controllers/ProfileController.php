<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function index()
    {
        $users = User::all();

        return view('user.index')->with('users',$users);
    }
    
    public function create()
    {
        return view('user.create');
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('user.edit', compact('user'));
    }

    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'name' => 'required|string',
                'email' => 'required|string',
                'password' => 'required|string',
                'rol' => 'required|string',
            ]);
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->validator)->withInput();
        }
    
        $user = new User();
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->password = $validatedData['password'];
        $user->rol = $validatedData['rol'];

        $user->save();
    
        return redirect('/users');
    }
    /**
     * Update the user's profile information.
     */
    public function update(Request $request, $id)
    {
        try {
            $validatedData = $request->validate([
                'name' => 'required|string',
                'email' => 'required|string',
                'password' => 'required|string',
                'rol' => 'required|string',
            ]);
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->validator)->withInput();
        }
    
        $user = User::find($id);
    
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->password = $validatedData['password'];
        $user->rol = $validatedData['rol'];

        $user->save();
    
        return redirect('users');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request, $id): RedirectResponse
    {
        
        $userToDelete = User::findOrFail($id);
        $currentUser = $request->user();
    
        if ($userToDelete->id === $currentUser->id) {
            // Si el usuario a borrar es el usuario autenticado, cierra la sesión y regenera el token
            Auth::logout();
            $userToDelete->delete();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return Redirect::to('/');
        } else {
            // Si el usuario a borrar no es el usuario autenticado, solo elimina el usuario
            $userToDelete->delete();
            return redirect('users');
        }     
    }
}
