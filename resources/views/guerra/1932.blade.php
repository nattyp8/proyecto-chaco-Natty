@extends('layouts.app')

    @section('content')
            <div class="flex flex-col h-full justify-between">
                    <div class="flex items-start gap-[18px] mb-[28px]">
                        <div class="w-[18px] h-[42px]"></div>
                        <h1 class="title max-w-[320px]">
                            {{ $data['title'] }}
                        </h1>
                    </div>
            </div>
    @endsection

