@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row">
            

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Attendance {{ $attendance->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/attendances') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/attendances/' . $attendance->id . '/edit') }}" title="Edit Attendance"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['attendances', $attendance->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-sm',
                                    'title' => 'Delete Attendance',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $attendance->id }}</td>
                                    </tr>
                                    <tr><th> Scheduled Event Id </th><td> {{ $attendance->scheduled_event_id }} </td></tr><tr><th> Student Id </th><td> {{ $attendance->student_id }} </td></tr><tr><th> Event Id </th><td> {{ $attendance->event_id }} </td></tr><tr><th> Event Date </th><td> {{ $attendance->event_date }} </td></tr><tr><th> Time In </th><td> {{ $attendance->time_in }} </td></tr><tr><th> Time Out </th><td> {{ $attendance->time_out }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
