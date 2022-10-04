<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // try {
        // $request->validate([
        //     'email' => 'required|string|email',
        //     'password' => 'required|string|min:6',
        // ]);

        // $attr = request(['email','password']);
        // if (!Auth::attempt($attr)) {
        //     return response()->json([
        //         'status_code' =>500,
        //         'message' => 'Unauthorized'
        //     ]);
        // }

        // $user = User::where('email', $request->email)->first();
        // if (!Hash::check($request->password, $user->password, [])) {
        //     throw new \Exception('Error in Login');
        // }

        // $token = $user->createToken('authToken')->plainTextToken;
        // return response()->json([
        //     'status_code' => 200,
        //     'access_token' => $token,
        //     'token_type' => 'Bearer',
        // ]);
        // } catch (\Exception $error) {
        //     return response()->json([
        //         'status_code' => 500,
        //         'message' => 'Error in Login',
        //         'error' => $error,
        //     ]);
        // }
        $attr = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string|min:6',
        ]);
        if (!Auth::attempt($attr)) {
            return response()->json([
                'status' => 500,
                'message' => 'Invalid login'
            ]);
        }

        $user = User::where('email',$request->email)->first();
        $token = $user->createToken('authToken')->plainTextToken;
        // dd($token);
        $code = 200;
        return response()->json([
            'status' => 'Success',
            'message' => 'Successfull login',
            'access_token' => $token
        ], $code);
    }

    public function logout()
    {
        auth()->user()->tokens()->delete();
        $code = 200;

        return response()->json([
            'status' => 'success',
            'message' => 'Token Revoked',
        ], $code);
    }

    // try {
    //     $request->validate([
    //         'email' => 'required|string|email',
    //         'password' => 'required|string|min:6',
    //     ]);

    //     $attr = request(['email','password']);
    //     if (!Auth::attempt($attr)) {
    //         return response()->json([
    //             'status_code' =>500,
    //             'message' => 'Unauthorized'
    //         ]);
    //     }

    //     $user = User::where('email', $request->email)->first();
    //     if (!Hash::check($request->password, $user->password, [])) {
    //         throw new \Exception('Error in Login');
    //     }

    //     $token = $user->createToken('authToken')->plainTextToken;
    //     return response()->json([
    //         'status_code' => 200,
    //         'access_token' => $token,
    //         'token_type' => 'Bearer',
    //     ]);
    // } catch (\Exception $error) {
    //     return response()->json([
    //         'status_code' => 500,
    //         'message' => 'Error in Login',
    //         'error' => $error,
    //     ]);
    // }

    public function index(Request $request)
    {
        return response()->json([
            'status' => 'Success',
            'data-login' => auth()->user()
        ]);
    }
}
