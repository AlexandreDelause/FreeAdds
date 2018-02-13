<html>
@extends('layouts.app')
<head>
<title>Vivabite adds</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

<div class="container">
<h1>Post Add</h1>

@if(Session::has('success'))
   <div class="alert alert-success">
     {{ Session::get('success') }}
   </div>
@endif

{!! Form::open(array('route'=>'freeadd.store', 'file'=> true, 'enctype' => 'multipart/form-data')) !!}

<div class="form-group {{ $errors->has('titre') ? 'has-error' : '' }}">
{!! Form::label('Titre:') !!}
{!! Form::text('titre', old('titre'), ['class'=>'form-control', 'placeholder'=>'Enter Title']) !!}
<span class="text-danger">{{ $errors->first('titre') }}</span>
</div>

<div class="form-group {{ $errors->has('prix') ? 'has-error' : '' }}">
{!! Form::label('Price:') !!}
{!! Form::text('prix', old('prix'), ['class'=>'form-control', 'placeholder'=>'Enter Price']) !!}
<span class="text-danger">{{ $errors->first('prix') }}</span>
</div>

<div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
{!! Form::label('Message:') !!}
{!! Form::textarea('message', old('message'), ['class'=>'form-control', 'placeholder'=>'Enter Message']) !!}
<span class="text-danger">{{ $errors->first('message') }}</span>
</div>
<div class="form-group {{ $errors->has('image') ? 'has-error' : '' }}">
{!! Form::label('Picture:') !!}
{!! Form::file('image', old('image'), ['class'=>'form-control', 'placeholder'=>'Select Picture']) !!}
<span class="text-danger">{{ $errors->first('image') }}</span>
</div>
{!! Form::hidden('user_id', Auth::user()->id, ['class'=>'form-control']) !!}
<div class="form-group">
<button class="btn btn-success">Post Add!</button>
</div>

{!! Form::close() !!}

</div>

</body>
</html>
