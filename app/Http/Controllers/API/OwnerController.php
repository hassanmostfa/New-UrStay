<?php


namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\Owner;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Storage; 

class OwnerController extends Controller
{
    // Owner Register API

    public function ownerRegister(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'mot_permission' => 'required|file|mimes:pdf,jpg,jpeg,png|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        try {

            $user = Owner::create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'mot_permission' => $request->file('mot_permission')->store('mot_permissions'),
            ]);

            $user->save();
            return response()->json(['status' => 'success', 'message' => 'تم التسجيل بنجاح']);
        }
        catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()], 500);
        }

    }

    // Owner Login API

    public function ownerLogin(Request $request)
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
            $owner = Owner::where('email', $request->email)->first();
    
            if (!$owner || !Hash::check($request->password, $owner->password)) {
                return response()->json(['status' => 'error', 'message' => 'Invalid email or password'], 401);
            }
    
            // Create a new token
            $token = $owner->createToken('access_token')->plainTextToken;
    
            return response()->json([
                'success' => true,
                'message' => 'تم تسجيل الدخول بنجاح',
                'access_token' => $token,
                'token_type' => 'Bearer',
                'data' => $owner
            ], 200);
        } catch (\Throwable $th) {
            return response()->json(['error' => $th->getMessage()], 500);
            }
    }


    // Owner Logout API

    public function ownerLogout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        return response()->json(['status' => 'success', 'message' => 'تم تسجيل الخروج بنجاح']);
    }

}
