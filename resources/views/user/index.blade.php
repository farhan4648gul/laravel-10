@extends('layouts.app') 


@section('content')
    
    Hey! 

    @foreach ($a as $item)
        <br> 
        {{ $item }}
        <br> 
    @endforeach


    @if (true)
        <button> Inside If </button> 
    @else
        <button> Inside Else </button> 

    @endif 

    <img src="{{ asset('favicon.ico') }}" />

    

@endsection 

