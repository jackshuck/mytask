<?php

namespace App\Http\Controllers;
use App\Models\Teachersub;
use Illuminate\Http\Request;

class teachersubController extends Controller
{
    
    public function create()
    {
        return view('teacher.dashboard.subject');
    }

    public function store(Request $request)
    {
        $request->validate([
            'subname' => 'required|string|max:255',
            'topic' => 'required|email|unique:students,email|max:255',
            'notes' => 'required|string|max:255',
            'depart' => 'required|string|max:255',


        ]);
        Teachersub::create($request->all());

        return redirect()->route('teacher.dashboard.subject')->with('success', 'Student created successfully!');
    }

    public function dashboard()
    {
        $subjects = Teachersub::all(); // Retrieve all students from the database
        return view('teacher.dashboard.subindex', compact('subjects'));
    }
}
