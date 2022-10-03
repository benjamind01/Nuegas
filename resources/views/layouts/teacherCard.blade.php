<div id="teacher" class="bg-white w-6/12  p-4 rounded-3xl ml-4 flex flex-col items-center">
    <div class="flex w-full flex-row justify-between items-center">
        <div id="profil" class="flex flex-row items-center">
            <img class="w-10 h-10 ml-4" src="{{ asset('pp.png') }}" alt="profil picture">
            <div id="written" class="ml-4">
                <h4 id="name" class="text-name-color font-medium text-lg">{{ $teacher->name }}</h4>
                <span class="text-gray text-sm">{{ $teacher->domain }}</span>
            </div>
        </div>
    </div>
    <div id="stats" class="mt-6 flex flex-row justify-between items-center w-9/12">
        <div id="tasksNumber" class="flex flex-row">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 6.878V6a2.25 2.25 0 012.25-2.25h7.5A2.25 2.25 0 0118 6v.878m-12 0c.235-.083.487-.128.75-.128h10.5c.263 0 .515.045.75.128m-12 0A2.25 2.25 0 004.5 9v.878m13.5-3A2.25 2.25 0 0119.5 9v.878m0 0a2.246 2.246 0 00-.75-.128H5.25c-.263 0-.515.045-.75.128m15 0A2.25 2.25 0 0121 12v6a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 18v-6c0-.98.626-1.813 1.5-2.122" />
            </svg>
            <p class="ml-2">{{ count($teacher->tasks) }} Tasks</p>
        </div>
        <!--- <div id="tasksNumber" class="flex flex-row">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-star fill-star">
                <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
              </svg>
            <p class="ml-2">290 Students</p>
        </div> -->
    </div>
</div>