<div id="navbar" class="w-2/12 bg-white flex flex-col items-center justify-between">
    <div id="buttons" class="flex flex-col items-center">
        <div id="logo" class="flex flew-row items-center justify-center mt-6"> 
            <svg width="48" height="48" viewBox="0 0 24 24" class="fill-current text-white" xmlns="http://www.w3.org/2000/svg">
                <path d="M16.19 2H7.81C4.17 2 2 4.17 2 7.81V16.18C2 19.83 4.17 22 7.81 22H16.18C19.82 22 21.99 19.83 21.99 16.19V7.81C22 4.17 19.83 2 16.19 2ZM11.5 17.25C11.5 17.61 11.14 17.85 10.81 17.71C9.6 17.19 8.02 16.71 6.92 16.57L6.73 16.55C6.12 16.47 5.62 15.9 5.62 15.28V7.58C5.62 6.81 6.24 6.24 7 6.3C8.25 6.4 10.1 7 11.26 7.66C11.42 7.75 11.5 7.92 11.5 8.09V17.25ZM18.38 15.27C18.38 15.89 17.88 16.46 17.27 16.54L17.06 16.56C15.97 16.71 14.4 17.18 13.19 17.69C12.86 17.83 12.5 17.59 12.5 17.23V8.08C12.5 7.9 12.59 7.73 12.75 7.64C13.91 6.99 15.72 6.41 16.95 6.3H16.99C17.76 6.3 18.38 6.92 18.38 7.69V15.27Z" fill="#292D32"/>
            </svg>
            <h1 class="font-PlusJakartaSans ml-2 font-medium text-2xl inline-block align-bottom">Nuegas</h1>
        </div>
        <div id="links" class="mt-12">
            <a href="/dashboard">
            <div class="{{ $page === "overview" ? "bg-rectangle" : "bg-none"}} flex flex-row justify-center items-center py-2 pl-4 pr-10 rounded-lg hover:bg-rectangle transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7 {{ $page != "overview" ? "text-text-link" : ""}}">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 7.125C2.25 6.504 2.754 6 3.375 6h6c.621 0 1.125.504 1.125 1.125v3.75c0 .621-.504 1.125-1.125 1.125h-6a1.125 1.125 0 01-1.125-1.125v-3.75zM14.25 8.625c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v8.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 01-1.125-1.125v-8.25zM3.75 16.125c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v2.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 01-1.125-1.125v-2.25z" />
                </svg>
                  <p class="font-PlusJakartaSans font-semibold ml-2 {{ $page != "overview" ? "text-text-link" : ""}}">Overview</p>
            </div>
            </a>
            <a href="/tasks_manager">
            <div class="{{ $page === "tasks" ? "bg-rectangle" : "bg-none"}} flex flex-row items-center py-2 pl-4 pr-10 rounded-lg mt-4 hover:bg-rectangle transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7 {{ $page != "tasks" ? "text-text-link" : ""}}">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                  </svg>                  
                  <p class="font-PlusJakartaSans font-semibold ml-2 {{ $page != "tasks" ? "text-text-link" : ""}}">Tasks</p>
            </div> 
            </a>
            <a href="/teachers">
            <div class="{{ $page === "teachers" ? "bg-rectangle" : "bg-none"}} flex flex-row items-center py-2 pl-4 pr-10 rounded-lg mt-4 hover:bg-rectangle transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7 {{ $page != "teachers" ? "text-text-link" : ""}}">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                  </svg>                                   
                  <p class="font-PlusJakartaSans font-semibold ml-2 {{ $page != "teachers" ? "text-text-link" : ""}}">Teachers</p>
            </div> 
            </a>
            <a href="/messages">
            <div class="{{ $page === "messages" ? "bg-rectangle" : "bg-none"}} flex flex-row items-center py-2 pl-4 pr-10 rounded-lg mt-4 hover:bg-rectangle transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7 {{ $page != "messages" ? "text-text-link" : ""}}">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 9.75a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375m-13.5 3.01c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.184-4.183a1.14 1.14 0 01.778-.332 48.294 48.294 0 005.83-.498c1.585-.233 2.708-1.626 2.708-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
                </svg>                                                   
                  <p class="font-PlusJakartaSans font-semibold ml-2 {{ $page != "messages" ? "text-text-link" : ""}}">Messages</p>
            </div> 
            </a>
            <a href="/settings">
            <div class="{{ $page === "settings" ? "bg-rectangle" : "bg-none"}} flex flex-row items-center py-2 pl-4 pr-10 rounded-lg mt-4 hover:bg-rectangle transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7 {{ $page != "settings" ? "text-text-link" : ""}}">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                  </svg>                                                 
                  <p class="font-PlusJakartaSans font-semibold ml-2 {{ $page != "settings" ? "text-text-link" : ""}}">Settings</p>
             </div> 
            </a>
        </div>
          
            
    </div>
    <div id="help" class="w-10/12 flex flex-col items-center mb-16 text-center bg-help pt-12 pb-6 rounded-lg">
        <h3 class="text-white font-PlusJakartaSans text-lg font-semibold">Help Center</h3>
        <p class="text-white font-PlusJakartaSans text-sm mt-4 font-medium">Having Trouble in Learning.<br />Please contact us for more<br />questions.</p>
        <a class="mt-10 bg-white py-2 font-semibold px-4 rounded-lg"><button>Go To Help Center</button></a>
    </div>
</div>