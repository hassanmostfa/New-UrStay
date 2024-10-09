<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\Supervisor;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Storage; 

class SupervisorController extends Controller
{

    public function supervisorRegister(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:supervisors',
            'password' => 'required|string|min:8',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        try{
        $supervisor = Supervisor::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $supervisor->save();

        return response()->json(['status' => 'success', 'message' => 'تم التسجيل بنجاح'] , 200);

        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()], 500);
        }
    }

    // Login Supervisor API
    public function supervisorLogin(Request $request)
    {
        // Validation request
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        try {

            // Manually verify the credentials
            $supervisor = Supervisor::where('email', $request->email)->first();
    
            if (!$supervisor || !Hash::check($request->password, $supervisor->password)) {
                return response()->json(['status' => 'error', 'message' => 'Invalid email or password'], 401);
            }
    
            // Create a new token
            $token = $supervisor->createToken('access_token')->plainTextToken;
    
            return response()->json([
                'success' => true,
                'message' => 'تم تسجيل الدخول بنجاح',
                'access_token' => $token,
                'token_type' => 'Bearer',
                'data' => $supervisor
            ], 200);
        } catch (\Throwable $th) {
            return response()->json(['error' => $th->getMessage()], 500);
            }
    }

    // Logout Supervisor API
    public function supervisorLogout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        return response()->json(['status' => 'success', 'message' => 'تم تسجيل الخروج بنجاح']);
    }
}
