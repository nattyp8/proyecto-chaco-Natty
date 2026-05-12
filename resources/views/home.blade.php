@extends('layouts.app')
    @section('content')
        <div class="flex flex-col h-full ">

            <div class="shrink-0 px-5 pt-6  z-10">
                <div class="flex items-start gap-3 mb-3">
                    <img src="{{ asset('images/antestitulo.svg') }}"
                        class="h-7.5 w-auto opacity-50 mt-1"
                        alt="">
                    <h1 class="title max-w-[320px] m-0">
                        {{ $title }}
                    </h1>
                </div>
            </div>
                <div class="flex-1 overflow-y-auto px-3 ">
                    <div class="space-y-1.25 -max-w-105 whitespace-pre-line mb-5">
                        @foreach ($paragraphs as $p)
                            <p class="paragraph">
                                {{ $p }}
                            </p>
                        @endforeach
                    </div>
                </div>
           


            {{-- nav fijo  --}}
            <div class="shrink-0 z-10">
                <div class="flex justify-between items-start">

                    <div class="flex items-center gap-[10px]">

                        <div class="flex items-center gap-[8px]">
                            <img src="{{ asset('images/lineas.png') }}"
                            class="h-[20px] w-auto opacity-50 group-hover:opacity-100 transition"alt="">
                            <a href="{{ route('home', [
                                            'section' => 'antecedentes',
                                            'lang' => $lang
                                        ]) }}"
                                class="nav-home {{ $section === 'antecedentes' ? 'text-black' : 'text-gray-400' }}">
                                    {{ $nav['antecedentes'] }}
                            </a>
                        </div>
                        <div class="flex items-center gap-[8px]">
                            <img src="{{ asset('images/lineas.png') }}"
                            class="h-[20px] w-auto opacity-50 group-hover:opacity-100 transition" alt="">
                            <a href="{{ route('home', [
                                            'section' => 'fronteras',
                                            'lang' => $lang
                                        ]) }}"
                                class="nav-home {{ $section === 'fronteras' ? 'text-black' : 'text-gray-400' }}">
                                    {{ $nav['fronteras'] }}
                            </a>
                        </div>
                    </div>
                    <div class="flex items-center gap-[8px] ">
                        <img src="{{ asset('images/lineas.png') }}"
                        class="h-[20px] w-auto opacity-50 group-hover:opacity-100 transition" alt="">
                            <a href="{{ route('home', [
                                        'section' => 'fortines',
                                        'lang' => $lang
                                    ]) }}"
                                class="nav-home {{ $section === 'fortines' ? 'text-black' : 'text-gray-400' }}">
                                    {{ $nav['fortines'] }}
                            </a>
                    </div>
                </div>
            </div>
        </div>

    @endsection



    

