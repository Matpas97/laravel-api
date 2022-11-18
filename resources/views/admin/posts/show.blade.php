@extends('layouts.dashboard')


@section('content')
    <h1>{{ $post->title }}</h1>
    @if ($post->category)
        <p><a href="{{ route('admin.categories.show', $post->category->id) }}"> {{ $post->category->name }}</a></p>
    @else
        <p>Nessuna categoria</p>
    @endif


    <p>{{ $post->content }}</p>

    <div class="tags">
        Tags:
        @foreach ($post->tags as $tag)
            <span>{{ $tag->name }}</span>
        @endforeach
    </div>




    <div class="mt-5">
        <a href="{{ route('admin.posts.edit', $post->id) }}">Edit</a>
    </div>


    <div class="mt-2">
        <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <input onclick="confirm('Are you sure?')" type="submit" value="Elimina">
        </form>
    </div>
@endsection
