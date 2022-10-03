<div id="main" class="w-7/12 flex flex-col items-center mt-8">
    <div id="header" class="flex flex-row items-center justify-between w-11/12">
        <div id="hello">
            <h3 class="font-PlusJakartaSans font-medium text-2xl">Hi, {{Auth::user()->name}}</h3>
            <p class="font-PlusJakartaSans text-lg mt-2 text-gray">Let's finish your task today!</p>
        </div>
        <div id="profil" class="flex flew-row items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
            </svg>             
            <img class="w-10 ml-4" src="{{ asset('pp.png') }}" alt="profil picture">
        </div>
    </div>
    <div id="Teachers" class="mt-8 w-11/12">
        <div class="flex flex-row items-center justify-between">
            <h3 class="font-PlusJakartaSans font-medium text-2xl">Teachers</h3>
            <div class="flex flex-row">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 swiper-prev1">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 swiper-next1">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                </svg> 
            </div>
        </div>
        <div id="cards" class="mt-8 flex flex-row">
            <div class="swiper w-full mySwiper1">
                <div class="swiper-wrapper flex flex-row">   
                    <div class="swiper-slide w-full flex flex-row"> 
                        @php $countTeacher = 0 @endphp
                        @foreach($teachers as $teacher)
                            @if($countTeacher == 2)
                                </div>
                                @php $countTeacher = 0; @endphp
                                <div class="swiper-slide flex flex-row">
                            @endif
                            @include('layouts.teacherCard')
                            @php $countTeacher++; @endphp 
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="tasks" class="mt-10 flex flex-col w-11/12">
        <div>
            <div class="flex flex-row items-center justify-between">
                <h3 class="font-PlusJakartaSans font-medium text-2xl">Upcoming Tasks</h3>
                <div class="flex flex-row">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 swiper-prev2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 swiper-next2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg> 
                </div>
            </div>
        </div>
        <div class="">
            <div class="swiper mySwiper2">
                <div class="swiper-wrapper flex flex-row mt-2">   
                    <div class="swiper-slide flex flex-row"> 
                @php $count = 0 @endphp
                @foreach($tasks as $task)
                    @if($count == 2)
                        </div>
                        <div class="swiper-slide flex flex-row">
                    @endif
                    @include('layouts.taskCard')
                    @php $count++; @endphp 
                @endforeach
                    </div>
                </div>
            </div>  
        </div>
    </div>
</div>