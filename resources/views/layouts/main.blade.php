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
    <div id="monthlyMentors">
        <div>
            
        </div>
    </div>
</div>