@extends('layouts.app')
@section('content')
    <div id="app"
        x-data="timeLineComponent(@js($yearData))"
        class="flex flex-col h-full justify-between">

        <h1 x-text="year.title" class="title"></h1>

        <p class="paragraph" x-text="year.intro" x-show="!currentEvent"></p>

        <div class="mb-6" x-show="currentEvent">
            <p class="text-sm opacity-60" x-text="currentEvent.date"></p>
            <p class="paragraph mt-2" x-text="currentEvent.text"></p>
        </div>

        <div class="mt-10 w-full">
            <div class="relative w-full h-2px bg-gray-400">
                
                <div class="absolute top-[-6px] left-0 rigth-0 flex justify-between">
                    <template x-for="event in year.events" :key="event.id">
                        <div class="flex flex-col items-center cursor-pointer"
                            @click="selectEvent(event)">
                            <div
                                class="w-3 h-3 rounded-full"
                                :class="currentEvent?.id === event.id
                                 ?'bg.black scale-125'
                                 :'bg-gray-400'">
                            </div>
                            <span class="text-xs mt-2"
                                :class="currentevent?.id === event.id? 'text-black' :'text-gray-400'"
                                x-text="event.label">
                            </span>
                            <div class="absolute top-0 left-0 h-[2px] bg-black"
                                :style="`width: ${ (year.events.findIndex(e => e.id === currentEvent?.id) / (year.events.length - 1)) * 100 }%`">
                            </div>
                        </div>
                    </template>
                </div>
            </div>
        </div>
    </div>
@endsection