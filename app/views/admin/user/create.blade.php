@extends('admin.layout.master')

@section('content')
<div class='col-lg-4 col-lg-offset-4'>
 
    @if ($errors->has())
        @foreach ($errors->all() as $error)
            <div class='bg-danger alert'>{{ $error }}</div>
        @endforeach
    @endif
 
    <h1><i class='fa fa-user'></i> Adauga User</h1>
 
    {{ Form::open(['role' => 'form', 'url' => 'admin/user']) }}
 
    <div class='form-group'>
        {{ Form::label('username', 'Username') }}
        {{ Form::text('username', null, ['placeholder' => 'Username', 'class' => 'form-control']) }}
    </div>
 
    <div class='form-group'>
        {{ Form::label('password', 'Password') }}
        {{ Form::password('password', ['placeholder' => 'Password', 'class' => 'form-control']) }}
    </div>
 
    <div class='form-group'>
        {{ Form::submit('Adauga', ['class' => 'btn btn-primary']) }}
    </div>
 
    {{ Form::close() }}
 
</div>
@stop