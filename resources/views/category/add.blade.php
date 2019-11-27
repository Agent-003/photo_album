@extends('layouts.app')
@section('content')
    <form action="{{route('category_store')}}" method="post">
        @csrf
            <input type="text" name="category_name">
            <input type="submit" value="Create">
    </form>
@endsection
