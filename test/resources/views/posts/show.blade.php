@extends('layouts.app')
@section('content')
    <h1>{{ $post->name }}</h1>
    <h3><a href="{{ route('post.edit',['id' => $post->id]) }}">EDIT</a></h3>
    <p class="description">
        {{ $post->description }}
    </p>
    @if($post->created_at)
        <p class="created">
            {{ $post->created_at->format('d/m/Y') }}
        </p>
    @endif

    @if($post->updated_at)
        <p class="updated">
            {{ $post->updated_at->format('d/m/Y') }}
        </p>
    @endif

    <form action="{{ route('post.delete', $post->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="Delete">
    </form>
@endsection
