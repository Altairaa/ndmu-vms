<div class="form-group {{ $errors->has('scheduled_event_id') ? 'has-error' : ''}}">
    {!! Form::label('scheduled_event_id', 'Scheduled Event Id', ['class' => 'control-label']) !!}
    {!! Form::number('scheduled_event_id', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('scheduled_event_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('student_id') ? 'has-error' : ''}}">
    {!! Form::label('student_id', 'Student Id', ['class' => 'control-label']) !!}
    {!! Form::number('student_id', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('student_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('event_id') ? 'has-error' : ''}}">
    {!! Form::label('event_id', 'Event Id', ['class' => 'control-label']) !!}
    {!! Form::number('event_id', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('event_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('event_date') ? 'has-error' : ''}}">
    {!! Form::label('event_date', 'Event Date', ['class' => 'control-label']) !!}
    {!! Form::date('event_date', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('event_date', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('time_in') ? 'has-error' : ''}}">
    {!! Form::label('time_in', 'Time In', ['class' => 'control-label']) !!}
    {!! Form::input('time', 'time_in', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('time_in', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('time_out') ? 'has-error' : ''}}">
    {!! Form::label('time_out', 'Time Out', ['class' => 'control-label']) !!}
    {!! Form::input('time', 'time_out', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('time_out', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary']) !!}
</div>
