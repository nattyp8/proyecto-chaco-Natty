@extends('layouts.app')
    {{-- @section('map')
        <div id="map" class="w-full h-full"></div>
    @endsection --}}

    @section('content')

        <div class="flex flex-col h-full justify-between">

            <div>

                <div class="flex items-start gap-[18px] mb-[28px]">
                    <div class="w-[18px] h-[42px]"></div>

                    <h1 class="title max-w-[320px]">
                        {{ $data['title'] }}
                    </h1>
                </div>

                <div class="space-y-[14px] max-w-[420px]">
                    @foreach ($data['paragraphs'] as $p)
                        <p class="paragraph">
                            {{ $p }}
                        </p>
                    @endforeach
                </div>

            </div>

            <div class="mt-[40px]">

                <div class="flex justify-between items-start">

                    <div class="flex items-center gap-[40px]">

                        <div class="flex items-center gap-[8px] opacity-40">
                            <span class="text-[18px]">/</span>
                            <span class="nav-text">ANTECEDENTES Y RESOLUCIÓN</span>
                        </div>

                        <div class="flex items-center gap-[8px] opacity-40">
                            <span class="text-[18px]">/</span>
                            <span class="nav-text">FRONTERAS Y AVANCES</span>
                        </div>

                    </div>

                    <div class="flex items-center gap-[8px] text-black">
                        <span class="text-[18px]">/</span>
                        <span class="nav-text">FORTINES VISITABLES</span>
                    </div>

                </div>

                <div class="w-[160px] h-[3px] bg-gray-400 mt-[16px]"></div>

            </div>

        </div>

    @endsection



    

