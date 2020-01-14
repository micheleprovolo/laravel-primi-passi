@extends('layouts.layout-base')

@section('content')
    
        @foreach ($cds as $cd)

        <div class="cd">

            <img src="{{$cd['poster']}}">

            <h2>{{$cd['title']}}</h2>

            <h3>{{$cd['author']}}</h3>

            <h4>{{$cd['year']}}</h4>

        </div>

        @endforeach

@endsection

