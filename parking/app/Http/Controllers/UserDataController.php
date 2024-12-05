<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserData;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserDataController extends Controller
{
    // Show the list of user data (index page)
    public function index()
    {
        if (auth()->user()) {
            return redirect('/parking');
        }

        return view('signup');
    }

    public function store(Request $request)
    {
        // Validate the input data
        $validatedData = $request->validate([
            'fullname' => 'required|string|max:255',
            'email' => 'required|email|unique:datas,email',
            'password' => 'required',
        ]);

        // Create a new user
        $user = new UserData();
        $user->name = $validatedData['fullname'];
        $user->email = $validatedData['email'];
        $user->password = Hash::make($validatedData['password']);

        // Save the user to the database
        $user->save();

        // Redirect to login page after successful registration
        return redirect('/login');
    }

    public function getall(Request $request)
    {
        // Validate the credentials
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Retrieve the user by email
        $user = UserData::where('email', $validated['email'])->first();

        // Check if the user exists and the password is correct
        if ($user && Hash::check($validated['password'], $user->password)) {
            // Log the user in
            auth()->login($user);

            // Check if the logged-in user is an admin or user
            if (auth()->user()->role === 'user') {
                dd('dsdfsdff');
                return redirect('/parking');
            } elseif (auth()->user()->role === 'admin') {
              
                return redirect('/admin');
            }
        }

        // If the login failed, return an error message
        return response()->json(['message' => 'Invalid email or password'], 401);
    }

    public function login()
    {
        // Check if a user is logged in using auth()->user()
        if (auth()->user()) {
            return redirect('/parking');
        }

        return view('login');
    }

    public function logout()
    {
        // Log the user out
        auth()->logout();

        // Redirect to the login page
        return redirect('/login');
    }
}
