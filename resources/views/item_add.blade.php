

@extends('layouts.base_layout')

@section('title', 'Home Page')

@section('header')
    @parent
    <p>Welcome to the Home Page!</p>
@endsection

@section('body')
    <div>
     <h1>Add Item </h1>
    @if($message) 
        <p>{{ $message }}</p>
    @endif
     <form action="" method="post">
        @csrf
        <input type="text" name="name" id="id_name">
        <input type="number" name="rate" id="id_rate">
        <button> Add Item </button>
    </form>
</div>
@endsection

@section('footer')
    <p>Additional footer information can go here.</p>
@endsection