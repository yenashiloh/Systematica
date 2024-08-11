<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash; 
use Illuminate\Support\Facades\Auth;
use App\Models\UserRegistration;
class UserController extends Controller
{
    //view welcome page
    public function welcomePage()
    {
        return view("index");
    }

    //view login page
    public function loginPage()
    {
        return view("login");
    }

    //view account sign up page 
    public function signUpPage()
    {
        return view ('sign-up');
    }

    //post sign up
    public function storeUserDetails(Request $request)
    {
        // Validate the data of users
        $validateData = $request->validate([
            'username' => 'required|unique:user_registration,username',
            'email' => 'required|email|unique:user_registration,email',
            'first-name' => 'required',
            'last-name' => 'required',
            'birthdate' => 'required|date',
            'password' => 'required|confirmed',
        ]);

        $user = new UserRegistration(); // user registration model
        $user->username = $request->username;
        $user->email = $request->email;
        $user->first_name = $request->input('first-name');
        $user->middle_name = $request->input('middle-name');
        $user->last_name = $request->input('last-name');
        $user->birthdate = $request->birthdate;
        $user->password = Hash::make($request->password);

        $user->save();

        // Redirect to the home page after successful sign-up
        return redirect()->route('user.home')->with('success', 'Registration successful!');
    }

    public function homePage()
    {
        return view ('user.home');
    }

    //check the username and email if already exist
    public function checkUsernameEmail(Request $request)
    {
        $exists = UserRegistration::where('username', $request->username)
            ->orWhere('email', $request->email)
            ->exists();

        $response = [
            'exists' => $exists,
            'username' => UserRegistration::where('username', $request->username)->exists(),
            'email' => UserRegistration::where('email', $request->email)->exists()
        ];

        return response()->json($response);
    }
    
    public function loginPost(Request $request)
    {
        // Validate the login credentials
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);
    
        $credentials = $request->only('email', 'password');
    
        if (Auth::attempt($credentials)) {
            // Authentication passed
            return redirect()->intended('user.home');
        }
    
        // Authentication failed
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
    
    
    

}
