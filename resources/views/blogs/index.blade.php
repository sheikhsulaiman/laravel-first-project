@extends('layouts.app')
@section('title', 'Create Blog')
@section('content')
    <h1>Blog posts</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if ($blogs->isEmpty())
        <p>No blog posts available.</p>
    @else
        <ul>
            @foreach ($blogs as $blog)
                <li>
                    <h2>{{ $blog->title }}</h2>
                    <p>{{ $blog->description }}</p>
                    
                </li>
            @endforeach
        </ul>

    @endif
    <a href="{{ route('blogs.create') }}" class="btn btn-primary">Create Blog</a>

@endsection