@extends('layouts.app')
@section('title', 'Create Blog')
@section('content')
    <h1>Create Blog</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('blogs.store')}}" method='POST'>
        @csrf
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="{{ old('title') }}">
        </div>
        <div>
            <label for="description">Description</label>
            <textarea name="description" id="description">{{ old('description') }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Create Blog</button>
</form>
    