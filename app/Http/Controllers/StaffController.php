<?php

namespace App\Http\Controllers;

use App\Models\Staff;

class StaffController extends Controller
{
    public function index()
    {
        $staffs = Staff::all();
        return response()->json($staffs);
    }

    public function store()
    {
        $staff = Staff::create(request()->all());
        return response()->json($staff);
    }

    public function show(Staff $staff)
    {
        return response()->json($staff);
    }

    public function update(Staff $staff)
    {
        $staff->update(request()->all());
        return response()->json($staff);
    }

    public function destroy(Staff $staff)
    {
        $staff->delete();
        return response()->json(["message" => "Successfully deleted data"], 204);
    }
}
