@extends('layouts.app')

@section('content')
    <form action="">
        {!! $html !!}
    </form>
    <div class="container" id="app">
        <hd-image></hd-image>
        <div class="row justify-content-center">
            {{Form::text('email', 'example@gmail.com',['class' => 'form-control'])}}
        </div>
    </div>
@endsection