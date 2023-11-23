@extends('layouts.app')

@section('content')

<div class="m-auto w-4/5 py-24">
    <div class="text-center">
        
        <h1 class="text-5xl uppercase bold">
            {{ $car->name }}
        </h1>
        
    </div>

    <div class="py-10 text-center">

        <div class="m-auto">
            <span class="uppercase text-blue-500 font-bold text-xs italic">
                Founded : {{ $car->founded }}
            </span>
            <img 
            src="{{ asset('images/' . $car->image_path) }}"
            class = "w-8/12 mb-8 shadow-xl mx-auto"
            alt="">
            <p class="text-lg text-gray-700">
                {{ $car->description }}
            </p>

            <ul>
                <p class="text-lg text-gray-700 py-3">
                    Models:
                </p>
                
                <table class="table-auto mx-auto">
                    <tr class="bg-blue-100">
                        <th class="w-1/4 border-4 border-gray-500">
                            Model
                        </th>
                        <th class="w-1/4 border-4 border-gray-500">
                            Engines
                        </th>
                        <th class="w-1/4 border-4 border-gray-500">
                            Date
                        </th>
                    </tr>

                    @forelse($car->carModels as $model)
                        <tr>
                            <td class="border-4 border-gray-500">
                                {{$model->model_name}}
                            </td>   
                            <td class="border-4 border-gray-500">
                                @foreach($car->engines as $engine)
                                    @if($model->id == $engine->model_id)
                                        {{$engine->engine_name}}
                                    @endif
                                @endforeach
                            </td>
                            <td class="border-4 border-gray-500">
                                {{ date('d-M-Y', strtotime($car->productionDate->created_at)) }}
                            </td>   
                        </tr>
                    @empty
                        <p>
                            No Models Found.
                        </p>
                    @endforelse
                </table>
                <p>
                    Product Types:
                    @forelse($car->products as $product)
                        {{ $product->name }} -
                    @empty
                         <p>
                            No Products Found.
                         </p>
                    @endforelse
                </p>
            </ul>
            <hr class="mt-4 mb-8">
        </div>
    </div>
</div>

@endsection