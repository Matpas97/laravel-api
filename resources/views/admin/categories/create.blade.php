@extends('layouts.dashboard')


@section('content')
    @if ($errors->any())
        <div class="row">
            <div class="col-12 bg-danger">
                Ci sono errori...
            </div>
        </div>
    @endif

    <form action="{{ route('admin.categories.store') }}" method="POST">
        @csrf


        <div @error('name') class="is-invalid" @enderror>
            <label for="name">Category name:</label>
            <input type="text" name="name" maxlength="30" value="{{ old('name', '') }}">
            @error('name')
                <div class="text-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div>
            <input type="submit" value="Crea">
        </div>
    </form>
@endsection
