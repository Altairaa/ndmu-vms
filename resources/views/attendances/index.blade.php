@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-11">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <a href="{{ url('/attendances/create') }}" class="btn btn-success btn-sm" title="Add New Attendance">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        {!! Form::open(['method' => 'GET', 'url' => '/attendances', 'class' => 'form-inline pull-right', 'role' => 'search'])  !!}
                        <div class="form-group">
                            <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                            <span class="input-group-append">
                                <button class="btn btn-secondary" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        {!! Form::close() !!}

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>#</th><th>Scheduled Event Id</th><th>Student Id</th><th>Event Id</th><th>Event Date</th><th>Time In</th><th>Time Out</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($attendances as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->scheduled_event_id }}</td><td>{{ $item->student_id }}</td><td>{{ $item->event_id }}</td><td>{{ $item->event_date }}</td><td>{{ $item->time_in }}</td><td>{{ $item->time_out }}</td>
                                        <td>
                                            <a href="{{ url('/attendances/' . $item->id) }}" title="View Attendance"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/attendances/' . $item->id . '/edit') }}" title="Edit Attendance"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/attendances', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-sm',
                                                        'title' => 'Delete Attendance',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $attendances->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
