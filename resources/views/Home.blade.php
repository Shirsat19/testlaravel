@extends('layouts.mian')
@section('title',"testlaravel demo")
@section('desc','desction')
@section('css')
    <style>
        .demo{
            background-color: red;
        }
    </style>
@endsection

@section('content')
        <form action="\update1\4" method='post'>
            @csrf
            <input type="text" name='name'>
            <button type='submit'>submit</button>
        </form>
@endsection