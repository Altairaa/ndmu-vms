<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $students = Student::where('id_number', 'LIKE', "%$keyword%")
                ->orWhere('last_name', 'LIKE', "%$keyword%")
                ->orWhere('first_name', 'LIKE', "%$keyword%")
                ->orWhere('middle_name', 'LIKE', "%$keyword%")
                ->orWhere('sport_id', 'LIKE', "%$keyword%")
                ->orWhere('semester_id', 'LIKE', "%$keyword%")
                ->orWhere('Semester', 'LIKE', "%$keyword%")
                ->orWhere('birth_date', 'LIKE', "%$keyword%")
                ->orWhere('gender', 'LIKE', "%$keyword%")
                ->orWhere('course', 'LIKE', "%$keyword%")
                ->orWhere('year', 'LIKE', "%$keyword%")
                ->orWhere('contact_number', 'LIKE', "%$keyword%")
                ->orWhere('street', 'LIKE', "%$keyword%")
                ->orWhere('city_or_municipality', 'LIKE', "%$keyword%")
                ->orWhere('province', 'LIKE', "%$keyword%")
                ->orWhere('PE111', 'LIKE', "%$keyword%")
                ->orWhere('PE112', 'LIKE', "%$keyword%")
                ->orWhere('PE121', 'LIKE', "%$keyword%")
                ->orWhere('PE122', 'LIKE', "%$keyword%")
                ->orWhere('NSTP1', 'LIKE', "%$keyword%")
                ->orWhere('NSTP2', 'LIKE', "%$keyword%")
                ->orWhere('contact_person_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $students = Student::latest()->paginate($perPage);
        }

        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $this->validate($request, [
			'id_number' => 'required',
			'last_name' => 'required',
			'first_name' => 'required',
			'middle_name' => 'required',
			'sport_id' => 'required',
			'semester_id' => 'required',
			'Semester' => 'required',
			'birth_date' => 'required',
			'gender' => 'required',
			'course' => 'required',
			'year' => 'required',
			'contact_number' => 'required',
			'street' => 'required',
			'city_or_municipality' => 'required',
			'province' => 'required',
			'PE111' => 'required',
			'PE112' => 'required',
			'PE121' => 'required',
			'PE122' => 'required',
			'NSTP1' => 'required',
			'NSTP2' => 'required'
		]);
        $requestData = $request->all();
        
        Student::create($requestData);

        return redirect('students')->with('flash_message', 'Student added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $student = Student::findOrFail($id);

        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $student = Student::findOrFail($id);

        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
			'title' => 'required',
			'title' => 'required',
			'id_number' => 'required',
			'last_name' => 'required',
			'first_name' => 'required',
			'middle_name' => 'required',
			'sport_id' => 'required',
			'semester_id' => 'required',
			'Semester' => 'required',
			'birth_date' => 'required',
			'gender' => 'required',
			'course' => 'required',
			'year' => 'required',
			'contact_number' => 'required',
			'street' => 'required',
			'city_or_municipality' => 'required',
			'province' => 'required',
			'PE111' => 'required',
			'PE112' => 'required',
			'PE121' => 'required',
			'PE122' => 'required',
			'NSTP1' => 'required',
			'NSTP2' => 'required'
		]);
        $requestData = $request->all();
        
        $student = Student::findOrFail($id);
        $student->update($requestData);

        return redirect('students')->with('flash_message', 'Student updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Student::destroy($id);

        return redirect('students')->with('flash_message', 'Student deleted!');
    }
}
