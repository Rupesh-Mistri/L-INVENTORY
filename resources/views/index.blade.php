@extends('base_layout')

@section('title', 'Home Page')
    
@section('header')
    @parent
    <p>Welcome to the Home Page!</p>
@endsection

@section('body')
    <h1>Home Page Content</h1>
    <p>This is the main content of the home page.</p>
@endsection

@section('footer')
    <p>Additional footer information can go here.</p>
@endsection