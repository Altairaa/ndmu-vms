<div class="form-group {{ $errors->has('id_number') ? 'has-error' : ''}}">
    {!! Form::label('id_number', 'Id Number', ['class' => 'control-label']) !!}
    {!! Form::text('id_number', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('id_number', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('last_name') ? 'has-error' : ''}}">
    {!! Form::label('last_name', 'Last Name', ['class' => 'control-label']) !!}
    {!! Form::text('last_name', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('last_name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('first_name') ? 'has-error' : ''}}">
    {!! Form::label('first_name', 'First Name', ['class' => 'control-label']) !!}
    {!! Form::text('first_name', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('first_name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('middle_name') ? 'has-error' : ''}}">
    {!! Form::label('middle_name', 'Middle Name', ['class' => 'control-label']) !!}
    {!! Form::text('middle_name', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('middle_name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('sport_id') ? 'has-error' : ''}}">
    {!! Form::label('sport_id', 'Sport Id', ['class' => 'control-label']) !!}
    {!! Form::number('sport_id', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('sport_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('semester_id') ? 'has-error' : ''}}">
    {!! Form::label('semester_id', 'Semester Id', ['class' => 'control-label']) !!}
    {!! Form::number('semester_id', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('semester_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Semester') ? 'has-error' : ''}}">
    {!! Form::label('Semester', 'Semester', ['class' => 'control-label']) !!}
    {!! Form::select('Semester', json_decode('{"firstSem":"1st Semester","secondSem":"2nd Semester","summer":"Summer"}', true), null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('Semester', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('birth_date') ? 'has-error' : ''}}">
    {!! Form::label('birth_date', 'Birth Date', ['class' => 'control-label']) !!}
    {!! Form::date('birth_date', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('birth_date', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('gender') ? 'has-error' : ''}}">
    {!! Form::label('gender', 'Gender', ['class' => 'control-label']) !!}
    {!! Form::select('gender', json_decode('{"female":"Female","male":"Male"}', true), null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('gender', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('course') ? 'has-error' : ''}}">
    {!! Form::label('course', 'Course', ['class' => 'control-label']) !!}
    {!! Form::text('course', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('course', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('year') ? 'has-error' : ''}}">
    {!! Form::label('year', 'Year', ['class' => 'control-label']) !!}
    {!! Form::number('year', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('year', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('contact_number') ? 'has-error' : ''}}">
    {!! Form::label('contact_number', 'Contact Number', ['class' => 'control-label']) !!}
    {!! Form::text('contact_number', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('contact_number', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('street') ? 'has-error' : ''}}">
    {!! Form::label('street', 'Street', ['class' => 'control-label']) !!}
    {!! Form::text('street', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('street', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('city_or_municipality') ? 'has-error' : ''}}">
    {!! Form::label('city_or_municipality', 'City Or Municipality', ['class' => 'control-label']) !!}
    {!! Form::text('city_or_municipality', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('city_or_municipality', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('province') ? 'has-error' : ''}}">
    {!! Form::label('province', 'Province', ['class' => 'control-label']) !!}
    {!! Form::text('province', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('province', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('PE111') ? 'has-error' : ''}}">
    {!! Form::label('PE111', 'Pe111', ['class' => 'control-label']) !!}
    {!! Form::text('PE111', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('PE111', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('PE112') ? 'has-error' : ''}}">
    {!! Form::label('PE112', 'Pe112', ['class' => 'control-label']) !!}
    {!! Form::text('PE112', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('PE112', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('PE121') ? 'has-error' : ''}}">
    {!! Form::label('PE121', 'Pe121', ['class' => 'control-label']) !!}
    {!! Form::text('PE121', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('PE121', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('PE122') ? 'has-error' : ''}}">
    {!! Form::label('PE122', 'Pe122', ['class' => 'control-label']) !!}
    {!! Form::text('PE122', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('PE122', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('NSTP1') ? 'has-error' : ''}}">
    {!! Form::label('NSTP1', 'Nstp1', ['class' => 'control-label']) !!}
    {!! Form::text('NSTP1', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('NSTP1', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('NSTP2') ? 'has-error' : ''}}">
    {!! Form::label('NSTP2', 'Nstp2', ['class' => 'control-label']) !!}
    {!! Form::text('NSTP2', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('NSTP2', '<p class="help-block">:message</p>') !!}
</div>
<!-- <div class="form-group {{ $errors->has('contact_person_id') ? 'has-error' : ''}}">
    {!! Form::label('contact_person_id', 'Contact Person Id', ['class' => 'control-label']) !!}
    {!! Form::number('contact_person_id', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('contact_person_id', '<p class="help-block">:message</p>') !!}
</div> -->


<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary']) !!}
</div>
