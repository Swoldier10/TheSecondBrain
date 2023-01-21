<div @click.away="open = false"
     class="flex flex-col w-full lg:w-64 text-gray-700 bg-white dark-mode:text-gray-200 dark-mode:bg-gray-800 flex-shrink-0 lg:border-r"
     x-data="{ open: false }">
    <div class="flex-shrink-0 px-4 lg:px-8 py-4 flex flex-row items-center justify-between border-b">
        <!-- App Title -->
        <a href="{{ route('dashboard') }}" class="mx-auto">
            {{--            {{ config('app.name', 'Jetbar') }}--}}
            <img src="{{ asset('images/TheSecondBrain-Logo.png') }}" class="w-32">
        </a>
        <!-- End App Title -->
        <button class="rounded-lg lg:hidden rounded-lg focus:outline-none focus:shadow-outline" id="navigation_btn">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 5.25h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5" />
            </svg>
        </button>
    </div>
    <!-- Sidebar Links -->
    <nav class="flex-grow lg:block px-4 pb-4 lg:pb-0 lg:overflow-y-auto z-10 hidden sm:block" id="sidebar">
        @if(Laravel\Jetstream\Jetstream::hasTeamFeatures())
            @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                <a class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 {{ request()->routeIs('teams.create') ? 'bg-gray-200' : 'bg-transparent' }} rounded-lg dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 hover:bg-gray-200 focus:text-gray-900 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                   href="{{ route('teams.create') }}">Create Team</a>
            @endcan
            <a class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 {{ request()->routeIs('teams.show') ? 'bg-gray-200' : 'bg-transparent' }} rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
               href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">Team Settings</a>
        @endif

        <a href="{{ route('dashboard') }}"
           class="flex items-center mt-2 p-2 text-base font-normal text-gray-900 rounded-lg hover:bg-gray-100 {{ request()->routeIs('dashboard') ? 'bg-gray-200' : 'bg-transparent' }}">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0012 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75z" />
            </svg>
            <span class="ml-3">Dashboard</span>
        </a>

        <a href="{{ route('profile.show') }}"
           class="flex items-center mt-2 p-2 text-base font-normal text-gray-900 rounded-lg hover:bg-gray-100 {{ request()->routeIs('profile.show') ? 'bg-gray-200' : 'bg-transparent' }}">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                 stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"/>
            </svg>
            <span class="ml-3">Profile</span>
        </a>
    </nav>
    <!-- End Sidebar Links -->
</div>

<script>
    let sidebarDegree = 90;
    $(document).on('click', '#navigation_btn', function () {
        $(this).css({'transform': 'rotate(' + sidebarDegree + 'deg)'});
        sidebarDegree += 90;
        $('#sidebar').slideToggle();
    })
</script>
