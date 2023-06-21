<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\AuthRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    /**
     * @throws ValidationException
     */
    public function auth(AuthRequest $request)
    {
//        $credentials = $request->only([
//            'email',
//            'password',
//            'device_name'
//        ]);

        $user = User::where('email', $request->email)->first();

//        Has::check($request->password, $user->password);

        if (!$user || !Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages(['email' => ['The provider credentials are incorrect']]);
        }

//        Logout others devices
//        if ($request->has('logout_athers_devices'))

        $user->tokens()->delete();

        $token = $user->createToken($request->device_name)->plainTextToken;

        return response()->json([
            'token' => $token,
        ]);
    }
    public function logout(Request $request)
    {
        $request->user()->tokens()->delete();

        return response()->json([
            'message' => 'success',
        ]);
    }

    public function me(Request $request)
    {
        $user = $request->user();

        return response()->json([
            'me' => $user,
        ]);
    }
}
