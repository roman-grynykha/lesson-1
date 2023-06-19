@extends('layouts.app')

@section('title', 'Create post')

@section('content')
    <div class="container mx-auto py-10">
        <h1 class="text-4xl mb-8 text-gray-700">Create a new post</h1>
        <form method="POST" action="/posts" class="bg-white rounded-md shadow-md p-6">
            @csrf
            <div class="mb-5">
                <label for="title" class="block text-gray-600 mb-1">Title</label>
                <input type="text" id="title" name="title" required class="w-full border border-gray-200 px-4 py-2 rounded">
            </div>
            <div class="mb-5">
                <label for="body" class="block text-gray-600 mb-1">Body</label>
                <input type="text" id="body" name="body" required class="w-full border border-gray-200 px-4 py-2 rounded">
            </div>
            <button type="submit" class="text-blue-500 hover:text-blue-600 underline mr-2" >Create</button>
        </form>
    </div>
@endsection
