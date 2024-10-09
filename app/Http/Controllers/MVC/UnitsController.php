<?php

namespace App\Http\Controllers\MVC;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Unit;
use App\Models\Owner;
use App\Models\CompletedUnit;
use App\Models\Category;
use App\Models\Zone;
use App\Models\Governorate;
use App\Models\City;
use App\Models\District;
use App\Models\Booking;
class UnitsController extends Controller
{

    // ==============================================================================
    // =========================== Admin Functions ==================================
    // ==============================================================================

    // get all units
public function allUnits()
{
    $units = Unit::where('request_status' , 'completed')->get();
    return view('admin.units.allUnits' , compact('units'));
}

// show unit details
public function unitDetails($id)
{
    $unit = Unit::find($id);
    return view('admin.units.showUnitDetails' , compact('unit'));
}

// Update unit details 
public function updateUnitPage(Request $request , $id)
{
    $unit = Unit::find($id);
    $categories = Category::all();
    $zones = Zone::all();
    return view('admin.units.updateUnit' , compact('unit' , 'categories' , 'zones'));
}


    // Update Unit
    public function updateUnit(Request $request , $id)
    {
        $unit = Unit::find($id);
        $unit->update($request->all());
        return redirect()->route('admin.dashboard')->with('success', 'Unit updated successfully.');
    }

    // Delete unit 
    
    // Delete Unit
    public function deleteUnit($id)
    {
        $unit = Unit::find($id);
        $unit->delete();
        return redirect()->route('admin.allUnits')->with('success', 'Unit deleted successfully.');
    }


    // get new units requests 
    public function newUnitsRequests()
    {
        $units = Unit::where('request_status' , 'pending')->get();
        return view('admin.units.newRequests' , compact('units'));
    }

    // Approve unit
    public function approveUnit($id)
    {
        $unit = Unit::find($id);
        $unit->request_status = 'approved';
        $unit->save();
        return redirect()->route('admin.allUnits')->with('success', 'Unit approved successfully.');
    }

    // Reject unit
    public function rejectUnit($id)
    {
        $validation = request()->validate([
            'rejection_reason' => 'required',
        ]);
        $unit = Unit::find($id);
        $unit->request_status = 'rejected';
        $unit->rejection_reason = request('rejection_reason');
        $unit->save();
        return redirect()->route('admin.newUnitsRequests')->with('success', 'تم الرفض بنجاح');
    }


    // Show Unit Details for User
    public function showUnitDetails($id)
    {
        $unit = Unit::find($id);
        $owner_id = $unit->owner_id;
        $owner = Owner::find($owner_id);
         
        // Get completed unit details
        $completedUnit = CompletedUnit::where('unit_id' , $id)->first();
        return view('user.showUnit' , compact('unit' , 'owner' , 'completedUnit'));
    }

    // Show Unit Details for Admin
    public function showUnitDetailsForAdmin($id)
    {
        $unit = Unit::find($id);
        $owner_id = $unit->owner_id;
        $owner = Owner::find($owner_id);

        // If request status is completed get the completed unit details
            $completedUnit = CompletedUnit::where('unit_id' , $id)->first();
        return view('admin.units.showUnitDetails' , compact('unit' , 'owner' , 'completedUnit'));
    }

    // Show Rejected Units
    public function rejectedUnits(){
        $units = Unit::where('request_status' , 'rejected')->get();
        return view('admin.units.rejectedUnits' , compact('units'));
    }

    // Show Updated Units
    public function updatedUnits(){
        $units = Unit::where('request_status' , 'updated')->get();
        return view('admin.units.updatedUnits' , compact('units'));
    }


    // Get All Approved Units
    public function getApprovedUnits(){
        $units = Unit::where('request_status' , 'approved')->get();
        return view('admin.units.approvedUnits' , compact('units'));
    }
    // ==============================================================================

}
