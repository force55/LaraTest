@extends('layouts.app')
@section('content')
    <h1 class="main-text">Каталог</h1>
    @foreach($posts as $post)
        <div class="post">
            <a href="post/{{$post->id}}"> {{ $post->name }}</a>
            {{ substr($post->description,0,200) }}
            @if($post->created_at)
                {{ $post->created_at->format('d/m/Y') }}
            @endif
        </div>
    @endforeach

    {{ $posts->links() }}
@endsection

