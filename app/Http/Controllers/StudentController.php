<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Student;
use Error;

class StudentController extends Controller
{
    public function login()
    {
        return view('student.login');
    }

    public function register()
    {
        return view('student.registreren');
    }

    public function view()
    {
        $studenten = Student::paginate(6);
        return view('studenten', compact('studenten'));
    }

    public function store(Request $request)
    {
        $request->validate([
            '_token' => 'required',
            'gebruikersnaam' => 'required',
            'volledige_naam' => 'required',
            'email' => 'required',
            'wachtwoord' => 'required',
            'terms' => 'required',
        ]);

        $student = new Student;
        $student->gebruikersnaam = $request->gebruikersnaam;
        $student->volledige_naam = $request->volledige_naam;
        $student->email = $request->email;
        $student->password = bcrypt($request->wachtwoord);
        $student->team = 0;
        $student->save();

        return redirect('/studenten');
    }

    public function loggingin()
    {
        // Login gives 'gebruikernaam' and 'wachtwoord' as input
        // Validate it to the 'studenten' table
        // If it's correct, redirect to the 'studenten' page and set the session to the 'gebruikersnaam'
        // Don't use Auth::attempt() because it's not a user, it's a student

        $credentials = $this->validate(request(), [
            'gebruikersnaam' => 'required|string',
            'wachtwoord' => 'required|string'
        ]);

        if (Student::where('gebruikersnaam', $credentials['gebruikersnaam'])->exists()) {
            $student = Student::where('gebruikersnaam', $credentials['gebruikersnaam'])->first();
            if (password_verify($credentials['wachtwoord'], $student->password)) {
                session(['gebruikersnaam' => $student->gebruikersnaam]);
                return redirect('/studenten');
            }
        } else {
            abort(404, 'Gebruikersnaam of wachtwoord is incorrect');
        }
    }
}