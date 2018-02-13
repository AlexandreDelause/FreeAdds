@extends('layouts.app')
@if(isset(Auth::user()->email))
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>My Free Adds</h2>
            </div>
          </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>Title</th>
            <th width="280px">Operation</th>
        </tr>
        @foreach ($freeadd as $free)

    <tr>
        <td>{{ $free->titre }}</td>
        <td>
            <a class="btn btn-info" href="{{ route('freeadds.show',$free->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('freeadds.edit',$free->id) }}">Edit</a>
            {!! Form::open(['method' => 'DELETE','route' => ['freeadds.destroy', $free->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    
    @endforeach
    </table>
    {!! $freeadd->render() !!}
@endsection
@endif
@if(!isset(Auth::user()->email))
<?php header('Location: ./home'); exit;?>
@endif
