@extends('guest.templates.base')

@section('title', 'Comic')

@section('content')
    <h1>prova</h1>
    <div>
        {{-- @dd($comic) --}}
        <h2>{{$comic[0]['title']}}</h2>
    </div>
    <div></div>
@endsection
