@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 pt-20">
        <div class="characters">
            <h2 class="uppercase tracking-wider text-yellow-600 text-lg font-semibold">Characters</h2>
            <div class="grid grid-cols-4 gap-16">

                @foreach($characters as $character)
                    <div class="mt-8">
                        <a href="#">
                            <img src="{{ $character['thumbnail']['path'] }}.jpg" alt="parasite"
                            class="hover:opacity-100 transition ease-in-out duration-150">
                        </a>
                        <div class="mt-2">
                            <a href="#" class="text-lg mt-2 hover:text-gray:500">{{ $character['name'] }}</a>
                            <div class="flex items-center text-gray-900">
                                <span>star</span>
                                <span class="ml-1">85%</span>
                                <span class="mx-2">|</span>
                                <span>{{ \Carbon\Carbon::parse($character['modified'])->format('m d, y') }}</span>
                            </div>
                            <div class="text-yellow-700">
                                {{ \Illuminate\Support\Str::limit($character['description'], 50, $end='...') }}
                            </div> 
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection