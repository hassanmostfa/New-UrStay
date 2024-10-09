<?php

namespace App\Http\Controllers\MVC;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Storage; 
use Illuminate\Support\Facades\Log;
use App\Services\ForJawalyService;
class AuthController extends Controller
{
    protected $forJawalyService;

    public function __construct(ForJawalyService $forJawalyService)
    {
        $this->forJawalyService = $forJawalyService;
    }

    // Send OTP to user
    public function sendOtp(Request $request)
    {
        $request->validate([
            'phone' => 'required|regex:/^5[0-9]{8}$/',
        ]);
    
        $phone = $request->phone;
    
        $verificationCode = rand(100000, 999999);
        $request->session()->put('verificationCode', $verificationCode);
        $request->session()->put('phone', $phone);
    
        \Log::info("Sending OTP to {$phone} with code {$verificationCode}");
    
        try {
            $result = $this->forJawalyService->sendSMS($phone, "Your UrStay account verification code is: {$verificationCode}");
    
            if ($result['code'] === 200) {
                \Log::info("Message sent successfully.");
                return response()->json(['status' => 'success']);
            } else {
                \Log::error('Error sending OTP: ' . json_encode($result));
                return response()->json(['status' => 'error', 'message' => $result['message'] ?? 'An error occurred while sending OTP'], 422);
            }
        } catch (\Exception $e) {
            \Log::error('Error sending OTP: ' . $e->getMessage());
            return response()->json(['status' => 'error', 'message' => 'Failed to send OTP. Please try again later.'], 500);
        }
    }
    

    // Verify OTP that sent to user
    public function verifyOtp(Request $request)
    {
        $request->validate([
            'otp' => 'required|digits:6',
        ]);

        $sessionOtp = $request->session()->get('verificationCode');
        $phone = $request->session()->get('phone');

        if ($sessionOtp == $request->otp) {
            $request->session()->put('phone_verified', true);
            return response()->json(['status' => 'success']);
        } else {
            return response()->json(['status' => 'error', 'message' => 'Invalid OTP']);
        }
    }

    
    // Resend OTP to user
    // public function resendOtp(Request $request)
    // {
    //     $phone = $request->session()->get('phone');

    //     if (!$phone) {
    //         return response()->json(['status' => 'error', 'message' => 'You must request OTP first'], 422);
    //     }

    //     $verificationCode = rand(100000, 999999);
    //     $request->session()->put('verificationCode', $verificationCode);

    //     \Log::info("Resending OTP to {$phone} with code {$verificationCode}");

    //     try {
    //         $result = $this->forJawalyService->sendSMS($phone, "Your UrStay account verification code is: {$verificationCode}");

    //         if ($result['code'] === 200) {
    //             \Log::info("Message sent successfully.");
    //             return response()->json(['status' => 'success', 'message' => 'OTP resent successfully.']);
    //         } else {
    //             \Log::error('Error resending OTP: ' . json_encode($result));
    //             return response()->json(['status' => 'error', 'message' => $result['message'] ?? 'An error occurred while resending OTP'], 422);
    //         }
    //     } catch (\Exception $e) {
    //         \Log::error('Error resending OTP: ' . $e->getMessage());
    //         return response()->json(['status' => 'error', 'message' => 'Failed to resend OTP. Please try again later.'], 500);
    //     }
    // }
}
