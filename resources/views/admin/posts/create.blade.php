@extends('layouts.dashboard')

@section('content')
    @if ($errors->any())
        <div class="row">
            <div class="col-12 bg-danger">
                Ci sono errori...
            </div>
        </div>
    @endif


    <form method="POST" action="{{ route('admin.posts.store') }}">
        @csrf
        <div @error('title') class="is-invalid" @enderror>
            <label for="title">Titolo:</label>
            <input type="text" name="title" value="{{ old('title', '') }}">
            @error('title')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- categories -->
        <div @error('category_id') class="is-invalid" @enderror>
            <label for="category_id">Categoria: </label>
            <select name="category_id">
                <option value="">Nessuna</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ $category->id == old('category_id', -1) ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
            @error('category_id')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <!-- end categories -->
        <div @error('content') class="is-invalid" @enderror>
            <label for="content">Contenuto:</label>
            <textarea name="content" required cols="30" rows="10">{{ old('content', '') }}</textarea>
            @error('content')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- tags -->
        <div @error('tags') class="is-invalid" @enderror>
            <label>Tags:</label>
            @foreach ($tags as $tag)
                <input {{ in_array($tag->id, old('tags', [])) ? 'checked' : '' }} type="checkbox" name="tags[]"
                    value={{ $tag->id }}>
                <label>{{ $tag->name }}</label>
            @endforeach
        </div>


        <!-- end tags -->


        <div>
            <input type="submit" value="Crea">
        </div>
    </form>
@endsection
