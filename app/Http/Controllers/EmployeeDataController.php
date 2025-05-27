<?php

namespace App\Http\Controllers;

use App\Models\EmployeeData;
use Illuminate\Http\Request;


class EmployeeDataController extends Controller
{
    //


    public function store(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:employee_data,email',
        'phone' => 'required|string',
        'location' => 'nullable|string',
        'job_title' => 'nullable|string',
        'skills' => 'nullable|string',
        'experience' => 'nullable|string',
        'education' => 'nullable|string',
        'linkedin' => 'nullable|url',
        'notes' => 'nullable|string',
    ]);

    // Correctly create the record
    $employeeData = EmployeeData::create($validated);

    return response()->json(['success' => true, 'data' => $employeeData], 201);
}

}
