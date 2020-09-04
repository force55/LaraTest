@extends('layouts.app')
@section('content')

    <form action="{{ route('post.update',array('id' => $post->id)) }}" method="POST">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="{{ old('name',$post->name) }}">

        @if ($errors->has('name'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif

        <label for="description">Description</label>
        <textarea name="description" id="description" cols="30" rows="10">{{ old('description',$post->description) }}</textarea>

        @if ($errors->has('description'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('description') }}</strong>
            </span>
        @endif

        <input type="submit" value="Submit">

    </form>

@endsection
