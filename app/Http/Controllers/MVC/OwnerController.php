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
use App\Models\Owner;
use App\Models\Zone;
use App\Models\Governorate;
use App\Models\City;
use App\Models\District;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\SubOfSubCategory;



class OwnerController extends Controller
{
    // Register Owner
    public function register(Request $request)
    {
        return view('auth.registerPages.ownerRegister');
    }

    // Register Owner Action
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
            $owner = Owner::create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            $owner->save();
            return response()->json(['status' => 'success', 'message' => 'تم التسجيل بنجاح']);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return response()->json(['status' => 'error', 'message' => 'حدث خطأ ما'], 500);
        }
    }

    // Login Owner Page
    public function loginPage()
    {
        return view('auth.loginPages.ownerLogin');
    }

    // Login Owner Action
    public function loginAction(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => 'error', 'message' => $validator->errors()], 422);
        }

        if (Auth::guard('owner')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('owner-dashboard');
        } else {
            return redirect()->route('owner.login')->with('error', 'Invalid email or password');
        }
    }

    // Owner Logout
    public function logout()
    {
        Auth::guard('owner')->logout();
        return redirect()->route('owner.login');
    }

    // Owner Dashboard
    public function index()
    {
        return view('owner.dashboard');
    }

        // Fetch governorates based on selected zone
        public function getGovernorates($zoneId)
        {
            $governorates = Governorate::where('zone_id', $zoneId)->get();
            return response()->json($governorates);
        }
    
        // Fetch cities based on selected governorate
        public function getCities($governorateId)
        {
            $cities = City::where('governorate_id', $governorateId)->get();
            return response()->json($cities);
        }
    
        // Fetch districts based on selected city
        public function getDistricts($cityId)
        {
            $districts = District::where('city_id', $cityId)->get();
            return response()->json($districts);
        }

    
    // Fetch subcategories based on category ID
    public function getSubcategories($categoryId)
    {
        // Fetch subcategories where the category_id matches
        $subcategories = Subcategory::where('category_id', $categoryId)->get();

        // Return subcategories as a JSON response
        return response()->json($subcategories);
    }

    // Fetch sub-subcategories based on subcategory ID
    public function getSubSubcategories($subcategoryId)
    {
        // Fetch sub-subcategories where the subcategory_id matches
        $subSubcategories = SubOfSubcategory::where('sub_category_id', $subcategoryId)->get();

        // Return sub-subcategories as a JSON response
        return response()->json($subSubcategories);
    } 
}
