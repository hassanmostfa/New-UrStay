<?php

namespace App\Http\Controllers\MVC;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Storage; 
use Illuminate\Support\Facades\Log;
use App\Models\Supervisor;
class SupervisorController extends Controller
{
    // Register Supervisor Page
    public function registerPage()
    {
        return view('auth.registerPages.supervisorRegister');
    }

    // Register Supervisor Action
    public function registerAction(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => 'error', 'message' => $validator->errors()], 422);
        }

        try {
            $supervisor = Supervisor::create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            $supervisor->save();
            return response()->json(['status' => 'success', 'message' => 'تم التسجيل    بنجاح']);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return response()->json(['status' => 'error', 'message' => 'حدث خطأ ما'], 500);
        }

    }

        // Login Supervisor Page
        public function loginPage()
        {
            return view('auth.loginPages.supervisorLogin');
        }

        // Login Supervisor Action
        public function loginAction(Request $request)
        {
            $validator = Validator::make($request->all(), [
                'email' => ['required', 'string', 'email', 'max:255'],
                'password' => ['required', 'string', 'min:8'],
            ]);

            if ($validator->fails()) {
                return response()->json(['status' => 'error', 'message' => $validator->errors()], 422);
            }

            if (Auth::guard('supervisor')->attempt(['email' => $request->email, 'password' => $request->password])) {
                return redirect()->route('supervisor-dashboard');
            } else {
                return redirect()->route('/supervisor/login')->with('error', 'Invalid email or password');
            }
        }

        // Supervisor Dashboard
        public function index()
        {
            return view('supervisor.dashboard');
        }
}
