<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function register(RegisterRequest $request)
    {
        DB::beginTransaction();

        try {
            $user = User::create([
                'name'      => $request->name,
                'phone'     => $request->phone,
                'email'     => $request->email,
                'password'  => Hash::make($request->password)
            ]);

            DB::commit();

            return back()->with("success", 'Congrats ' . $user->name . ', you have successfully created an account.');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with("error", 'Something went wrong with our server.');
            Log::error($e->getMessage());
        }
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');

        try {
            $user = Auth::attempt($credentials);
            $user = Auth::user();

            if (!$user) {
                return back()->with("error", "Invalid email or password!");
            }
            return redirect()->route('home')->with('success', 'Welcome back, ' . $user->name);
        } catch (\Exception $e) {
            return back()->with("error", 'Something went wrong with our server.');
            Log::error($e->getMessage());
        }
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('home');
    }
}
