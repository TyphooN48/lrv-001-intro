<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($group, $student)
    {
        $student = Student::with('students')->findOrFail($student);

        return view('student.index', [
            'group' => $student->students,
            'student' => $student
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $group = Group::find($id);

        return view('student.create', [
            'group' => $group
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {
        $input = $request->all();
        Student::create($input);
        return redirect('/groups/' . $id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
