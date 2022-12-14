@extends('layouts.master')

@section('content')
    {!! Form::open([
            'route' => 'roles.store',
            ]) !!}
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
        {!! Form::label('name', __('Role Name'), ['class' => 'control-label']) !!}
        {!! Form::text('name', null,['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('description', __('Role Description'), ['class' => 'control-label']) !!}
        {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
    </div>
    {!! Form::submit( __('Add New Role'), ['class' => 'btn btn-md btn-brand']) !!}

    {!! Form::close() !!}

@endsection