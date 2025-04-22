<?php
namespace App\Http\Controllers;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class teacherController extends Controller
{
    public function loginForm()
    {
        return view('teacher.login');
    }


    public function login(Request $request)
    {
        $request->validate([
            'username'=>'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $teacher = Teacher::where('email', $request->email)->first();
        if (!$teacher || !Hash::check($request->password, $teacher->password)) {
            return back()->withErrors(['message' => 'Invalid credential, please try again']);
        }

        session(['teacher_id' => $teacher->id]);
        return redirect()->route('teacher.dashboard')->with('success', 'Teacher logged in successfully!');
    }

    public function dashboard()
    {
        if (!session()->has('teacher_id')) {
            return redirect()->route('teacher.login');
        }

        $teacher = Teacher::find(session('teacher_id'));
        return view('teacher.dashboard', ['teacher' => $teacher]);
    }

    
    public function logout()
    {
        session()->forget('teacher_id');
        return redirect()->route('teacher.loginForm');
    }

    public function dashsub()
    {
        return view('teacher.dashboard.subject');
    }
    public function home()
    {
        return view('teacher.home');
    }

    public function loginstu()
    {
        return view('teacher.loginstu');
    }
}
