@extends('layouts.app')

@section('content')

<div class="m-auto w-4/8 py-24">
    <div class="text-center">
        <h1 class="text-5xl uppercase bold">
            Update Car
        </h1>
    </div>
    <div class="flex justify-center pt-20">
        <form action="/cars/{{ $car->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="block">
                <img 
                src="{{ asset('images/' . $car->image_path) }}"
                class = "w-8/12 mb-8 shadow-xl mx-auto"
                alt="">
                <input 
                type="file"
                class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400"
                name="image"
                >
                <input 
                type="text"
                class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400"
                name="name"
                placeholder="Brand name..."
                value="{{ $car->name }}"
                >
                <input 
                type="text"
                class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400"
                name="founded"
                placeholder="Founded..."
                value="{{ $car->founded }}"
                >
                <input 
                type="text"
                class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400"
                name="description"
                placeholder="Description..."
                value="{{ $car->description }}"
                >
                <button 
                class="block shadow-5xl bg-green-400 mb-10 p-2 w-80 uppercase font-bold"
                type="submit"
                >
                    Update
                </button>
            </div>
        </form>
    </div>
</div>
@if($errors->any())
    <div class="w-4/8 m-auto text-center">
        @foreach($errors->all() as $error)
            <li class="text-red-500 list-none">
                {{ $error }}
            </li>
        @endforeach
    </div>
@endif
@endsection