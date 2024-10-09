<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\Citizen;
use App\Models\Visitor;
use App\Models\Resident;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Storage; 
use Illuminate\Support\Facades\Log;
class UserController extends Controller
{

    public function userRegister(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        try{
        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $user->save();

        return response()->json(['status' => 'success', 'message' => 'تم التسجيل بنجاح']);

        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return response()->json(['status' => 'error', 'message' => 'حدث خطأ ما'], 500);
        }
    }


        // Login API
        public function userLogin(Request $request)
        {
            // Validation request 
            $validator = Validator::make($request->all(), [
                'email' => 'required|email',
                'password' => 'required|string',
            ]);
            if ($validator->fails()) {
                return response()->json($validator->errors(), 400);
            }
            try {
                if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                    $user = Auth::user();
                    $token = $user->createToken('access_token')->plainTextToken;
                    return response()->json([
                        'success' => true,
                        'access_token' => $token ,
                        'token_type' => 'Bearer',
                        'data' => $user],
                        200);
                }else {
                    return response()->json(['error' => 'Unauthorised'], 401);
                }
            } catch (\Throwable $th) {
                return response()->json(['success' => false, 'message' => $th->getMessage()], 500);
            }
        }

        // Logout API
        public function userLogout(Request $request)
        {
        
            $request->user()->currentAccessToken()->delete(); // Delete access token
            return response()->json(['success' => true, 'message' => 'User logged out successfully.'], 200);
        }

        // Citizen Profile API
        public function citizenProfile(Request $request)
        {
            $validator = Validator::make($request->all(), [
                'pid_number' => 'required|string|max:255',
                'birth_date' => 'required|date',
            ]);
        
            if ($validator->fails()) {
                return response()->json(['status' => 'error', 'message' => $validator->errors()], 422);
            }
        
            try {
                $user = Citizen::create([
                    'user_id' => auth()->user()->id,
                    'pid_number' => $request->pid_number,
                    'birth_date' => $request->birth_date,
                ]);
        
                $user->save();
        
                // Reload the authenticated user
                $authenticatedUser = auth()->user();
                $authenticatedUser->update([
                    'is_completed' => true , 
                    'role' => 'citizen',
                ]);
                return response()->json(['status' => 'success',
                'message' => 'تم استكمال البيانات بنجاح',
                'profile_data' => $user,
                'user_data' => $authenticatedUser
            ]);
            } catch (\Exception $e) {
                return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
            }
        }

        // Visitor Profile API
        public function visitorProfile(Request $request)
        {
            $validator = Validator::make($request->all(), [
                'passport_number' => 'required|string|max:255',
                'birth_date' => 'required|date',
                'nationality' => 'required|string|max:255',
            ]);
        
            if ($validator->fails()) {
                return response()->json(['status' => 'error', 'message' => $validator->errors()], 422);
            }
        
            try {
                $user = Visitor::create([
                    'user_id' => auth()->user()->id,
                    'passport_number' => $request->passport_number,
                    'birth_date' => $request->birth_date,
                    'nationality' => $request->nationality,
                ]);
    
                $user->save();

                // Reload the authenticated user
                $authenticatedUser = auth()->user();
                $authenticatedUser->update([
                    'is_completed' => true , 
                    'role' => 'visitor',
                ]);

                return response()->json(['status' => 'success',
                'message' => 'تم استكمال البيانات بنجاح',
                'profile_data' => $user,
                'user_data' => $authenticatedUser
            ]);
            } catch (\Exception $e) {
                return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
            }
        }


        // Resident Profile API
        public function ResidentProfile(Request $request)
        {
            $validator = Validator::make($request->all(), [
                'resident_number' => 'required|string|max:255',
                'birth_date' => 'required|date',
            ]);
        
            if ($validator->fails()) {
                return response()->json(['status' => 'error', 'message' => $validator->errors()], 422);
            }
        
            try {
                $user = Resident::create([
                    'user_id' => auth()->user()->id,
                    'resident_number' => $request->resident_number,
                    'birth_date' => $request->birth_date,   
                ]);
    
                $user->save();

                // Reload the authenticated user
                $authenticatedUser = auth()->user();
                $authenticatedUser->update([
                    'is_completed' => true , 
                    'role' => 'resident',
                ]);

                return response()->json([
                    'status' => 'success',
                    'message' => 'تم استكمال البيانات بنجاح',
                    'profile_data' => $user,
                    'user_data' => $authenticatedUser
                ]);
            } catch (\Exception $e) {
                return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
            }
        }
}

