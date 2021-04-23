<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $students = Student::latest()->get();

        return view('principal.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nameStudent' => 'required',
            'documentNumberStudent' => 'required',
            'codeStudent' => 'required',
            'surnameStudent' => 'required',
            'emailStudent' => 'required|email',
            'phoneStudent' => 'required|max:10',
        ]);
        //dd($request);
        $data = DB::select('call insertStudent(?, ?,?, ?,?, ?,?, ?)',array($request->documentTypeStudent,$request->documentNumberStudent,$request->codeStudent,$request->nameStudent,$request->surnameStudent,$request->sexStudent,$request->emailStudent,$request->phoneStudent));
        return back()->withInput();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $data = DB::select('call deleteStudent(?)',array($student->id,));
        return back()->withInput();
    }
}
