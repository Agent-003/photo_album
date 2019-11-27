@extends('layouts.app')
@section('content')
    <form action="{{('upload_image')}} }}" method="post" enctype="multipart/form-data">
        @csrf
        <select name="category_id">
            @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>

        <input type="file" name="image">
        <input type="submit" value="Upload"/>
    </form>
@endsection
