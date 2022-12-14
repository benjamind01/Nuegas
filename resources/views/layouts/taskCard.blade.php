<div class="bg-white w-6/12  p-4 rounded-3xl ml-4 mt-4 flex flex-col">
    <img class="w-11/12  h-28 ml-4 object-cover" src="{{ $task->image }}" alt="profil picture">
    <div id="taskInfos" class="mt-2 text-left">
        <h4 id="name" class="text-name-color font-medium text-lg">{{ $task->name }}</h4>
        <span class="text-gray text-sm">{{ $task->topic }}</span>
    </div>
    <div class="w-full flex flex-row justify-between items-center mt-6">
        <h4 id="name" class="text-name-color font-medium text-md">Progress</h4>
        <p class="text-blue-logo">75%</p>
    </div>
    <div class="w-full bg-gray-200 rounded-full h-2.5 mt-2">
        <div class="bg-blue-logo h-2.5 rounded-full" style="width: 75%"></div>
    </div>
    <div class="mt-4 flex flex-row items-center">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg> 
        <p class="ml-2">3 Days Left</p>         
    </div>
</div>