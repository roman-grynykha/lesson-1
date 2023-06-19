@extends('layouts.app')

@section('title', 'Show post')

@section('content')
<div class="container mx-auto py-10">
    <div class="bg-white rounded-md shadow-md p-6">
        <h1 class="text-4xl mb-8 text-gray-700">{{ $post->title }}</h1>
        <p class="text-gray-500 mb-4">{{ $post->body }}</p>
        <div class="flex justify-end mt-4">
            <a class="text-blue-500 hover:text-blue-600 underline mr-2" href="/posts/{{ $post->id }}/edit">Edit</a>
            <form method="POST" action="/posts/{{ $post->id }}">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-blue-500 hover:text-blue-600 underline mr-2" >Delete</button>
            </form>
        </div>
    </div>
    <a class="block mt-16 text-blue-500 hover:text-blue-600 underline" href="/posts">Back to all posts</a>
</div>
@endsection
