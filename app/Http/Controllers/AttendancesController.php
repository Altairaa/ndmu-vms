<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Attendance;
use Illuminate\Http\Request;

class AttendancesController extends Controller
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
            $attendances = Attendance::where('scheduled_event_id', 'LIKE', "%$keyword%")
                ->orWhere('student_id', 'LIKE', "%$keyword%")
                ->orWhere('event_id', 'LIKE', "%$keyword%")
                ->orWhere('event_date', 'LIKE', "%$keyword%")
                ->orWhere('time_in', 'LIKE', "%$keyword%")
                ->orWhere('time_out', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $attendances = Attendance::latest()->paginate($perPage);
        }

        return view('attendances.index', compact('attendances'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('attendances.create');
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
			'scheduled_event_id' => 'required',
			'student_id' => 'required',
			'event_id' => 'required',
			'event_date' => 'required',
			'time_in' => 'required',
			'time_out' => 'nullable'
		]);
        $requestData = $request->all();
        
        Attendance::create($requestData);

        return redirect('attendances')->with('flash_message', 'Attendance added!');
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
        $attendance = Attendance::findOrFail($id);

        return view('attendances.show', compact('attendance'));
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
        $attendance = Attendance::findOrFail($id);

        return view('attendances.edit', compact('attendance'));
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
			'scheduled_event_id' => 'required',
			'student_id' => 'required',
			'event_id' => 'required',
			'event_date' => 'required',
			'time_in' => 'required',
			'time_out' => 'nullable'
		]);
        $requestData = $request->all();
        
        $attendance = Attendance::findOrFail($id);
        $attendance->update($requestData);

        return redirect('attendances')->with('flash_message', 'Attendance updated!');
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
        Attendance::destroy($id);

        return redirect('attendances')->with('flash_message', 'Attendance deleted!');
    }
}
