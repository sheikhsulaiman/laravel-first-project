@extends('layouts.app')
@section('title', 'Create Blog')
@section('content')
    
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
        <div class="flex items-center justify-between p-4">
            <h1 class="text-5xl font-bold">Blogs</h1>
                <a href="{{ route('blogs.create') }}" class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg]:size-4 [&_svg]:shrink-0 bg-primary text-primary-foreground hover:bg-primary/90 p-2">Create Blog <x-iconpark-rightsmallup-o class="h-8 w-8" /></a>

        </div>
        <ul class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            {{-- Loop through the blogs and display them --}}
            @foreach ($blogs as $blog)
                <li>
                    <div class="p-4 border-2 border-gray-300 rounded-lg m-4">
                        <h2 class="text-2xl border-b pb-1 border-gray-300 line-clamp-2">{{ $blog->title }}</h2>
                        <p class="pt-2 text-gray-600 line-clamp-2">{{ $blog->description }}</p>
                    </div   
                </li>
            @endforeach
        </ul>

    @endif

@endsection