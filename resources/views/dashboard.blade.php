@extends('layouts.app')

@section('content')
    <h1 class="text-3xl font-semibold my-4 text-center">Dashboard</h1>

    @if (session('success'))
        <div class="bg-green-500 text-white p-4 rounded-lg mb-6 text-center flex items-center justify-between">
            <div class="flex items-center">
                <p>{{ session('success') }}</p>
            </div>
        </div>
        <h3>New Color:</h3>
        <div class="w-8 h-8 mr-4 rounded-full block my-4" style="background-color: {{ session('color') }};"></div>
    @endif

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($buttons as $button)
            <div class="relative group bg-white p-4 rounded-lg shadow-lg flex flex-col space-y-4">
            <h4 class="text-lg font-bold">{{$button->id}}</h4>
                <div class="flex flex-col items-center space-y-2">
                    <a href="{{ $button->hyperlink ? $button->hyperlink : route('edit-button', $button->id) }}"
                        class="block p-6 rounded-lg text-center transition-all duration-300 ease-in-out
                        {{ $button->hyperlink ? 'bg-green-500' : 'bg-yellow-500' }} hover:scale-105 shadow-lg w-full"
                        style="background-color: {{ $button->color }};">
                        <p class="text-white text-lg font-semibold">
                            {{ $button->hyperlink ? 'Go to link' : 'Set Config' }}
                        </p>
                    </a>
                </div>

                <div class="flex justify-between items-center mt-4">
                    <a href="{{ route('edit-button', $button->id) }}"
                        class="text-white bg-blue-600 hover:bg-blue-700 p-2 rounded-lg inline-block shadow-md">
                        <i class="fas fa-edit"></i> Edit
                    </a>

                    <form action="{{ route('delete-button', $button->id) }}" method="POST" class="inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-white bg-red-500 hover:bg-red-600 p-2 rounded-lg shadow-md">
                            <i class="fas fa-trash"></i> Delete
                        </button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
@endsection
