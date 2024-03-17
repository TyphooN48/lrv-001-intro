<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Student;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allGroups = Group::all();

        return view('group.index', [
            'groups' => $allGroups
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('group.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Group::create($input);
        return redirect('/groups');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $groupStudent = optional(Group::find($id))->getAllStudents;
        $groupInfo = Group::find($id);

        return view('group.group', [
            'students' => $groupStudent,
            'group' => $groupInfo
        ]);
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
