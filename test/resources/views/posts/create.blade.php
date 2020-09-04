@extends('layouts.app')
@section('content')
    <form class="form-control" action="{{ route('post.store') }}" method="POST">
        @csrf
        <label for="name">Name</label>
        <input id="name" name="name" type="text">
        @if ($errors->has('name'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif

        <label for="description">Description</label>
        <textarea name="description" id="description" cols="30" rows="10"></textarea>
        @if ($errors->has('description'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('description') }}</strong>
            </span>
        @endif

        <input type="submit" value="Submit">
    </form>
@endsection
