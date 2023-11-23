@extends('layouts.app')

@section('content')

<div class="m-auto w-4/8 py-24">
    <div class="text-center">
        <h1 class="text-5xl uppercase bold">
            Create Car
        </h1>
    </div>
    <div class="flex justify-center pt-20">
        <form action="/cars" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="block">
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
                >
                <input 
                type="text"
                class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400"
                name="founded"
                placeholder="Founded..."
                >
                <input 
                type="text"
                class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400"
                name="description"
                placeholder="Description..."
                >
                <button 
                class="block shadow-5xl bg-green-400 mb-10 p-2 w-80 uppercase font-bold"
                type="submit"
                >
                    Submit
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