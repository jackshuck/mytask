<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StudentAuthController extends Controller
{
    public function showRegister()
    {
        return view('student.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'trade' => 'required',
            'level' => 'required',
            'email' => 'required|email|unique:students',
            'password' => 'required|min:6|confirmed',  // 'confirmed' expects a field named `password_confirmation`
        ]);

        // Insert student into database
        Student::create([
            'name' => $request->name,
            'trade' => $request->trade,
            'level' => $request->level,
            'email' => $request->email,
            'password' => Hash::make($request->password),  // Secure password
        ]);

        return redirect()->route('student.login')->with('success', 'Registration successful! Please login.');
    }

    public function showLogin()
    {
        return view('student.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $student = Student::where('email', $request->email)->first();

        if ($student && Hash::check($request->password, $student->password)) {
            session(['student_id' => $student->id]);
            return redirect()->route('student.welcome');  // Corrected: should redirect to 'dashboard' route
        }

        return back()->withErrors(['Invalid credentials']);
    }

    public function dashboard()
    {
        if (!session()->has('student_id')) {
            return redirect()->route('student.login')->withErrors(['Please login first.']);
        }

        $student = Student::find(session('student_id'));
        return view('student.welcome', compact('student',));  // Corrected: should match your actual view file
    }

    
    public function showStudents()
    {
        $students = Student::all();
        return view('teacher.dashboard.stuindex', compact('students'));
    }


    public function logout()
    {
        session()->forget('student_id');
        return redirect()->route('student.login');
    }



//update student

public function edit($id)
{
    $student = Student::findOrFail($id);
    return view('teacher.dashboard.studentedit', compact('student'));
}

// Update student
public function update(Request $request, $id)
{
    $student = Student::findOrFail($id);

    $request->validate([
        'name' => 'required',
        'trade' => 'required',
        'level' => 'required',
        'email' => 'required|email',
    ]);

    $student->update($request->all());

    return redirect()->route('dashboard.stuindex')->with('success', 'Student updated.');
}

// Delete student
public function destroy($id)
{
    Student::findOrFail($id)->delete();
    return redirect()->route('dashboard.stuindex')->with('success', 'Student deleted.');
}
}