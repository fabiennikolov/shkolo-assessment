@extends('layouts.app')

@section('content')
    <h1 class="text-3xl font-semibold mb-6 text-center">Edit Button Configuration</h1>

    <div class="mb-4">
        <a href="{{ route('dashboard') }}" class="inline-block text-blue-500 hover:text-blue-700">
            &larr; Back to Dashboard
        </a>
    </div>

    <form action="{{ route('update-button', $button->id) }}" method="POST" class="max-w-lg mx-auto p-6 bg-white shadow-lg rounded-lg">
        @csrf
        @method('PUT')

        <!-- Button Color Input with Custom Design -->
        <div class="mb-6">
            <label for="color" class="block text-lg font-medium text-gray-700 mb-2">Button Color</label>
            
            <div class="relative">
                <input type="color" id="color" name="color" value="{{ old('color', $button->color) }}"
                    class="w-full p-3 border-2 border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none appearance-none cursor-pointer"
                    style="padding-left: 2.5rem; height: 3.5rem; background: transparent;" />
                
                <!-- Color Preview -->
                <span class="absolute top-1/2 left-4 transform -translate-y-1/2 text-lg font-semibold text-gray-600">
                    <span class="block w-4 h-4 rounded-full" style="background-color: {{ old('color', $button->color) }};"></span>
                </span>
            </div>

            @error('color')
                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
            @enderror
        </div>

        <!-- Hyperlink Input -->
        <div class="mb-6">
            <label for="hyperlink" class="block text-lg font-medium text-gray-700 mb-2">Hyperlink</label>
            <input type="text" id="hyperlink" name="hyperlink" value="{{ old('hyperlink', $button->hyperlink) }}"
                class="w-full p-3 border-2 border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none"
                placeholder="https://example.com" />
            @error('hyperlink')
                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white py-3 rounded-md transition duration-200 ease-in-out">
            Update Button
        </button>
    </form>
@endsection
