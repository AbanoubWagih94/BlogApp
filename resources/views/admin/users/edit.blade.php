@extends('layouts.admin')

@section('content')
    <h1>Edit User</h1>

    <div class="row">
        <div class="col-sm-3">
            <img height="300px" src="{{ $user->photo? $user->photo->file: 'http://placehold.it/300*300'}}" alt="" class="img-responsive img-rounded">
        </div>
        
        <div class="col-sm-9">
            @include('layouts.errors')
            {!! Form::model($user, ['method' => 'PATCH', 'action' => ['AdminUsersController@update', $user->id], 'files' => true]) !!}
            {{ csrf_field() }}
            {{ method_field('patch') }}
            <div class="form-group">
                {!! Form::label('name','Name:') !!}
                {!! Form::text('name', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('email','Email:') !!}
                {!! Form::text('email', null, ['class'=>'form-control']) !!}
            </div>


            <div class="form-group">
                {!! Form::label('password','Password:') !!}
                {!! Form::password('password',  ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('role_id','Role:') !!}
                {!! Form::select('role_id', ['' => 'Choose Options'] + $roles, null,  ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('is_active','Status:') !!}
                {!! Form::select('is_active', [1 => 'Active', 0 => 'Not Active'], null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('photo_id','Profile Picture:') !!}
                {!! Form::file('photo_id', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Create User', ['class'=>'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
    
@endsection