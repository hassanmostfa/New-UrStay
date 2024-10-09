<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class AdminController extends Controller
{
    // Register API
    public function adminRegister(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:admins',
            'password' => 'required|string|min:8',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

      try {

        $admin = Admin::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $admin->save();

        return response()->json(['status' => 'success', 'message' => 'تم التسجيل بنجاح'  , 'data' => $admin]);

      } catch (\Exception $e) {
        Log::error($e->getMessage());
        return response()->json(['status' => 'error', 'message' => 'حدث خطأ ما'], 500);
      }
    }

    

    // Login API
    public function adminLogin(Request $request)
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
            $admin = Admin::where('email', $request->email)->first();
    
            if (!$admin || !Hash::check($request->password, $admin->password)) {
                return response()->json(['status' => 'error', 'message' => 'Invalid email or password'], 401);
            }
    
            // Create a new token
            $token = $admin->createToken('access_token')->plainTextToken;
    
            return response()->json([
                'success' => true,
                'message' => 'تم تسجيل الدخول بنجاح',
                'access_token' => $token,
                'token_type' => 'Bearer',
                'data' => $admin
            ], 200);
        } catch (\Throwable $th) {
            return response()->json(['status' => 'error', 'message' => $th->getMessage()], 500);
        }
    }
    
    

    // Logout API
    public function adminLogout(Request $request)
    {
        try {
            // Get the current authenticated user and delete their current access token
            $request->user()->currentAccessToken()->delete();
    
            return response()->json(['status' => 'success', 'message' => 'تم تسجيل الخروج بنجاح'], 200);
        } catch (\Throwable $th) {
            \Log::error('Logout error: ' . $th->getMessage());
            return response()->json(['status' => 'error', 'message' => 'Logout failed.'], 500);
        }
    }
    
    
}
