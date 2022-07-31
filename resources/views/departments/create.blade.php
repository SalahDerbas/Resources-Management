@extends('layouts.master')
@section('heading')
    {{__('Create Department')}}
@stop

@section('content')
    {!! Form::open([
            'route' => 'departments.store',
            ]) !!}
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
        {!! Form::label('Name', __('Department Name') . ':', ['class' => 'control-label thin-weight']) !!}
        {!! Form::text('name', null,['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label( __('Description'),  __('Department Description') . ':', ['class' => 'control-label thin-weight']) !!}
        {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
    </div>
    {!! Form::submit(__("Create Department"), ['class' => 'btn btn-md btn-brand']) !!}

    {!! Form::close() !!}

@endsection