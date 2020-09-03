<h1>{{ $post->name }}</h1>
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

