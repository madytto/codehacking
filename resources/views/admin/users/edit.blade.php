@extends('layouts.admin')

@section('content')

    <h1>Edit User</h1>

    <div class="row">
        <div class="col-md-3">
            <img src="{{ $user->photo ? $user->photo->file : 'http://placehold.it/400x400' }}" alt="" class="img-responsive img-rounded">
        </div>

        <div class="col-md-9">
            {!! Form::model($user, ['method' => 'PATCH', 'action' => ['AdminUsersController@update', $user->id], 'files' => true]) !!}

            <div class='form-group'>
                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
            </div>

            <div class='form-group'>
                {!! Form::label('email', 'Email:') !!}
                {!! Form::email('email', null, ['class' => 'form-control']) !!}
            </div>

            <div class='form-group'>
                {!! Form::label('password', 'Password:') !!}
                {!! Form::password('password', ['class' => 'form-control']) !!}
            </div>

            <div class='form-group'>
                {!! Form::label('role_id', 'Role:') !!}
                {!! Form::select('role_id', ['' => 'Choose Option'] + $roles, null, ['class' => 'form-control']) !!}
            </div>

            <div class='form-group'>
                {!! Form::label('is_active', 'Status:') !!}
                {!! Form::select('is_active', $status, null, ['class' => 'form-control']) !!}
            </div>

            <div class='form-group'>
                {!! Form::label('photo_id', 'Photo:') !!}
                {!! Form::file('photo_id', null, ['class' => 'form-control']) !!}
            </div>

            <div class='form-group'>
                {!! Form::submit('Update User', ['class' => 'btn btn-primary col-sm-2']) !!}
            </div>

            {!! Form::close() !!}

            {!! Form::open(['method' => 'DELETE', 'action' => ['AdminUsersController@destroy', $user->id]]) !!}

            <div class='form-group'>
                {!! Form::submit('Delete User', ['class' => 'btn btn-danger col-sm-offset-8 col-sm-2']) !!}
            </div>

            {!! Form::close() !!}
        </div>
    </div>

    @include('partials.form_errors')

@endsection