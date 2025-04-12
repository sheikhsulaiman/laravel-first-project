@extends('layouts.app')
@section('title', $blog->title)

@section('content')
    <article class="prose lg:prose-xl mx-auto">
        <h1 class="text-3xl font-bold">{{ $blog->title }}</h1>
        <p class="text-gray-600">{{ $blog->created_at->format('F j, Y') }}</p>
        <div class="mt-4">
            <p>{{ $blog->description }}</p>
        </div>
        <a href="/" class="inline-block mt-6 text-blue-500 hover:underline">Back to home</a>
    </article>
@endsection