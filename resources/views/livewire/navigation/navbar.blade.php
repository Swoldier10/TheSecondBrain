<header class="hidden lg:flex justify-between items-center py-4 px-6 bg-white border-b border-gray-200">
    {{-- Searchbar --}}
    <div class="flex items-center">
        <div class="relative mr-4 lg:mx-0">
            <span class="absolute inset-y-0 left-0 pl-3 flex items-center">
                <svg class="h-5 w-5 text-gray-500" viewBox="0 0 24 24" fill="none">
                    <path
                        d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </span>

            <input
                class="form-input w-32 sm:w-64 rounded-md pl-10 pr-4 p-2 bg-gray-100 focus:bg-transparent focus:border-indigo-300"
                type="text" placeholder="Search">
        </div>
    </div>
    {{-- End Searchbar --}}

    <div class="flex items-center">
        {{-- Notifications --}}
        <button id="dropdownUsersButton" data-dropdown-toggle="dropdownUsers" data-dropdown-placement="bottom"
                class="text-gray-900 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center"
                type="button">
            <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M15 17H20L18.5951 15.5951C18.2141 15.2141 18 14.6973 18 14.1585V11C18 8.38757 16.3304 6.16509 14 5.34142V5C14 3.89543 13.1046 3 12 3C10.8954 3 10 3.89543 10 5V5.34142C7.66962 6.16509 6 8.38757 6 11V14.1585C6 14.6973 5.78595 15.2141 5.40493 15.5951L4 17H9M15 17V18C15 19.6569 13.6569 21 12 21C10.3431 21 9 19.6569 9 18V17M15 17H9"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                </path>
            </svg>
        </button>
        <!-- Dropdown menu -->
        <div id="dropdownUsers" class="z-10 hidden bg-white rounded shadow w-60 border-px border-gray-900">
            <ul class="h-48 py-1 overflow-y-auto text-gray-900"
                aria-labelledby="dropdownUsersButton">
                <li>
                    <a href="#"
                       class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                        <img class="w-6 h-6 mr-2 rounded-full" src="/docs/images/people/profile-picture-1.jpg"
                             alt="Jese image">
                        Jese Leos
                    </a>
                </li>
                <li>
                    <a href="#"
                       class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                        <img class="w-6 h-6 mr-2 rounded-full" src="/docs/images/people/profile-picture-2.jpg"
                             alt="Jese image">
                        Robert Gough
                    </a>
                </li>
                <li>
                    <a href="#"
                       class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                        <img class="w-6 h-6 mr-2 rounded-full" src="/docs/images/people/profile-picture-3.jpg"
                             alt="Jese image">
                        Bonnie Green
                    </a>
                </li>
                <li>
                    <a href="#"
                       class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                        <img class="w-6 h-6 mr-2 rounded-full" src="/docs/images/people/profile-picture-4.jpg"
                             alt="Jese image">
                        Leslie Livingston
                    </a>
                </li>
                <li>
                    <a href="#"
                       class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                        <img class="w-6 h-6 mr-2 rounded-full" src="/docs/images/people/profile-picture-5.jpg"
                             alt="Jese image">
                        Michael Gough
                    </a>
                </li>
                <li>
                    <a href="#"
                       class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                        <img class="w-6 h-6 mr-2 rounded-full" src="/docs/images/people/profile-picture-2.jpg"
                             alt="Jese image">
                        Joseph Mcfall
                    </a>
                </li>
                <li>
                    <a href="#"
                       class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                        <img class="w-6 h-6 mr-2 rounded-full" src="/docs/images/people/profile-picture-3.jpg"
                             alt="Jese image">
                        Roberta Casas
                    </a>
                </li>
                <li>
                    <a href="#"
                       class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                        <img class="w-6 h-6 mr-2 rounded-full" src="/docs/images/people/profile-picture-1.jpg"
                             alt="Jese image">
                        Neil Sims
                    </a>
                </li>
            </ul>
            <a href="#"
               class="flex items-center p-3 text-sm font-medium text-blue-600 border-t border-gray-200 bg-gray-50 dark:border-gray-600 hover:bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:text-blue-500 hover:underline">
                <svg class="w-5 h-5 mr-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                     xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z"></path>
                </svg>
                Add new user
            </a>
        </div>

        {{-- End Notifications --}}

        {{-- User Dropdown --}}

        <div class="relative">

            <button id="dropdownBgHoverButton" data-dropdown-toggle="dropdownBgHover"
                    class="text-gray-600 focus:outline-none font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center"
                    type="button">
                {{ Auth::user()->name }}
                <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                     xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </button>

            <!-- Dropdown menu -->
            <div id="dropdownBgHover" class="z-10 hidden w-48 bg-white rounded shadow">
                <ul class="p-3 space-y-1 text-sm text-gray-700 dark:text-gray-200"
                    aria-labelledby="dropdownBgHoverButton">
                    <li>
                        <a
                            href="{{ route('profile.show') }}"
                            class="text-gray-900 flex items-center p-2 rounded hover:bg-gray-100 w-full cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" class="w-4 h-4 mr-2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"/>
                            </svg>
                            Profile
                        </a>
                    </li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <button
                                class="text-gray-900 flex items-center p-2 rounded hover:bg-gray-100 w-full cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75"/>
                                </svg>
                                Log Out
                            </button>
                        </form>
                    </li>
                </ul>
            </div>


            <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 h-full w-full z-10"
                 style="display: none;"></div>

            <div x-show="dropdownOpen"
                 class="absolute right-0 mt-2 w-48 bg-white rounded-md overflow-hidden shadow-xl z-10 border"
                 style="display: none;">

                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                    <div class="block px-4 py-2 text-xs text-gray-400">
                        {{ __('Manage Team') }}
                    </div>

                    <!-- Team Settings -->
                    <x-jet-dropdown-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                        {{ __('Team Settings') }}
                    </x-jet-dropdown-link>

                    @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                        <x-jet-dropdown-link href="{{ route('teams.create') }}">
                            {{ __('Create New Team') }}
                        </x-jet-dropdown-link>
                    @endcan

                    <div class="border-t border-gray-100"></div>

                    <!-- Team Switcher -->
                    <div class="block px-4 py-2 text-xs text-gray-400">
                        {{ __('Switch Teams') }}
                    </div>

                    @foreach (Auth::user()->allTeams() as $team)
                        <x-jet-switchable-team :team="$team"/>
                    @endforeach

                    <div class="border-t border-gray-100"></div>
                @endif

            <!-- Account Management -->
                <div class="block px-4 py-2 text-xs text-gray-400">
                    {{ __('Manage Account') }}
                </div>

                <x-jet-dropdown-link href="{{ route('profile.show') }}">
                    {{ __('Profile') }}
                </x-jet-dropdown-link>

                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                    <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                        {{ __('API Tokens') }}
                    </x-jet-dropdown-link>
            @endif

            <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-jet-dropdown-link href="{{ route('logout') }}"
                                         onclick="event.preventDefault();
                                                this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-jet-dropdown-link>
                </form>
            </div>

        </div>
        {{-- End User Dropdown --}}

    </div>
</header>
