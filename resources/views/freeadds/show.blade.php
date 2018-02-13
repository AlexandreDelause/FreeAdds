@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Add</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('freeadds.index') }}"> Back</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">


                <strong>Titre:</strong>
                <?php
                $uri = $_SERVER['REQUEST_URI'];
                $uri = explode('/', $uri);
                $uri = $uri[2];
                ?>
                @foreach($freeadd as $free)
                @if($free->id == $uri)
                {{ $free->titre }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Prix:</strong>
                {{ $free->prix }}
                <strong>Post:</strong>
                {{ $free->message }}
            </div>
        </div>
    </div>
@endif
@endforeach
@endsection
