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
