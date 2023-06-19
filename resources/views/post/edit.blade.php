@extends('layouts.app')

@section('title', 'Edit post')

@section('content')
    <div class="container mx-auto py-10">
        <h1 class="text-4xl mb-8 text-gray-700">Edit post</h1>
        <form method="POST" action="/posts/{{ $post->id }}" class="bg-white rounded-md shadow-md p-6">
            @csrf
            @method('PUT')
            <div class="mb-5">
                <label for="title" class="block text-gray-600 mb-1">Title</label>
                <input type="text" id="title" name="title" required value="{{ $post->title }}" class="w-full border border-gray-200 px-4 py-2 rounded">
            </div>
            <div class="mb-5">
                <label for="body" class="block text-gray-600 mb-1">Body</label>
                <input type="text" id="body" name="body" required value="{{ $post->body }}" class="w-full border border-gray-200 px-4 py-2 rounded">
            </div>
            <button type="submit" class="text-blue-500 hover:text-blue-600 underline mr-2" >Edit</button>
        </form>
    </div>
@endsection
