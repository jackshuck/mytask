<?php

namespace App\Http\Controllers;
use App\Models\Teachersub;
use Illuminate\Http\Request;

class TeachersubController extends Controller
{
    public function create()
    {
        return view('teacher.dashboard.subject'); // Form view
    }

    public function store(Request $request)
    {
        $request->validate([
            'subname' => 'required|string|max:255',
            'topic' => 'required|string|max:255', // Changed from 'email' to 'string'
            'notes' => 'required|string|max:255',
            'depart' => 'required|string|max:255',
        ]);

        Teachersub::create($request->only(['subname', 'topic', 'notes', 'depart']));

        return redirect()->route('teacher.dashboard.subindex') // Updated route name
                         ->with('success', 'Subject created successfully!');
    }

    public function dashboard()
    {
        $subjects = Teachersub::all();
        return view('teacher.dashboard.subindex', compact('subjects'));
    }
}
