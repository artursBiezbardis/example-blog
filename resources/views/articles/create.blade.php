@extends('layouts.app')
@section('content')
    <div class="container">
        <a href="{{ route('articles.index') }}" class="btn btn-primary btn-sm">
            Back
        </a>
        <form method="post" action="{{ route('articles.store') }}">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Your article title" value="{{ old('title') }}">
                @error('title')
                <div class="invalid-feedback">
                    {{ $message  }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="content">Content:</label>
                <textarea class="form-control @error('content') is-invalid @enderror" name="content" id="content" cols="30" rows="5">{{ old('content') }}</textarea>
                @error('content')
                <div class="invalid-feedback">
                    {{ $message  }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Create</button>
            </div>
        </form>
    </div>
@endsection
