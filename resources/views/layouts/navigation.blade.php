<!-- ========== HEADER ========== -->
<x-splade-toggle>

    <header class="flex flex-wrap md:justify-start md:flex-nowrap z-50 w-full text-sm">
        <nav class="mt-6 relative max-w-[85rem] w-full bg-white border border-gray-200 rounded-[36px] mx-2 py-3 px-4 md:flex md:items-center md:justify-between md:py-0 md:px-6 lg:px-8 xl:mx-auto dark:bg-neutral-800 dark:border-neutral-700" aria-label="Global">
            <div class="flex items-center justify-between">
                <Link class="flex-none text-xl font-semibold dark:text-white" href="/pre-lifecycle" aria-label="Brand">Sipencak - {{$year->year}}</Link>
                <!-- Hamburger -->
                <div class="-mr-2 flex items-center sm:hidden">
                    <button @click="toggle" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path v-bind:class="{ hidden: toggled, 'inline-flex': !toggled }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            <path v-bind:class="{ hidden: !toggled, 'inline-flex': toggled }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="hidden transition-all duration-300 basis-full grow md:block">
                <div class="flex flex-col gap-y-4 gap-x-0 mt-5 md:flex-row md:items-center md:justify-end md:gap-y-0 md:gap-x-7 md:mt-0 md:ps-7">
                <Link class="font-medium text-blue-600 md:py-6 dark:text-blue-500" href="{{ route('administrator.dashboard', $year) }}" active="{{ request()->routeIs('dashboard', $year) }}" aria-current="page">Home</Link>
                    <Link class="font-medium text-gray-500 hover:text-blue-600 md:border-gray-300 md:my-6 dark:border-neutral-700 dark:text-neutral-400 dark:hover:text-blue-500" href="{{route('pre-lifecycle.index')}}">Periode Kegiatan</Link>
                    <Link class="font-medium text-gray-500 hover:text-blue-600 md:border-gray-300 md:my-6 dark:border-neutral-700 dark:text-neutral-400 dark:hover:text-blue-500" href="{{route('administrator.management_user.index', $year)}}">Manajemen PPTK</Link>
                    <!-- Settings Dropdown -->
                    <div class="hidden sm:flex sm:items-center">
                        <x-dropdown placement="bottom-end">
                            <x-slot name="trigger">
                                <button class="flex items-center font-medium text-gray-500 hover:text-blue-600 md:border-gray-300 md:my-6 dark:border-neutral-700 dark:text-neutral-400 dark:hover:text-blue-500">
                                    <div>Penganggaran</div>
                                    <div class="ml-1">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </button>
                            </x-slot>

                            <x-slot name="content">
                                <x-dropdown-link :href="route('administrator.management_kegiatan.index', $year)" :active="request()->routeIs('profile.edit')">
                                    {{ __('Kelola Kegiatan Belanja') }}
                                </x-dropdown-link>
                                <x-dropdown-link :href="route('profile.edit', $year)" :active="request()->routeIs('profile.edit')">
                                    {{ __('Jadwal Penganggaran') }}
                                </x-dropdown-link>
                                <x-dropdown-link :href="route('profile.edit', $year)" :active="request()->routeIs('profile.edit')">
                                    {{ __('Lihat Rekapitulasi') }}
                                </x-dropdown-link>
                            </x-slot>
                        </x-dropdown>
                    </div>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-dropdown placement="bottom-end">
                    <x-slot name="trigger">
                        <button class="flex items-center gap-x-2 font-medium text-gray-500 hover:text-blue-600 md:border-s md:border-gray-300 md:my-6 md:ps-6 dark:border-neutral-700 dark:text-neutral-400 dark:hover:text-blue-500">
                            <div>Account</div>
                            <div class="">
                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M12 20a7.966 7.966 0 0 1-5.002-1.756l.002.001v-.683c0-1.794 1.492-3.25 3.333-3.25h3.334c1.84 0 3.333 1.456 3.333 3.25v.683A7.966 7.966 0 0 1 12 20ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10c0 5.5-4.44 9.963-9.932 10h-.138C6.438 21.962 2 17.5 2 12Zm10-5c-1.84 0-3.333 1.455-3.333 3.25S10.159 13.5 12 13.5c1.84 0 3.333-1.455 3.333-3.25S13.841 7 12 7Z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit', $year)">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link as="a" :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>


            <!-- Responsive Navigation Menu -->
            <div v-bind:class="{ block: toggled, hidden: !toggled }" class="sm:hidden">
                <div class="pt-2 pb-3 space-y-1">
                    <x-responsive-nav-link href="{{ route('administrator.dashboard', $year) }}" active="{{ request()->routeIs('dashboard', $year) }}">
                        {{ __('Home') }}
                    </x-responsive-nav-link>
                </div>

                <!-- Responsive Settings Options -->
                <div class="pt-4 pb-1 border-t border-gray-200">
                    <div class="px-4">
                        <div class="font-medium text-base text-gray-800">Product</div>
                    </div>
                    <div class="mt-3 space-y-1">
                        <x-responsive-nav-link :href="route('profile.edit', $year)" :active="request()->routeIs('profile.edit', $year)">
                            {{ __('Profile') }}
                        </x-responsive-nav-link>
                    </div>
                </div>

                <!-- Responsive Settings Options -->
                <div class="pt-4 pb-1 border-t border-gray-200">
                    <div class="px-4">
                        <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                        <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                    </div>

                    <div class="mt-3 space-y-1">
                        <x-responsive-nav-link :href="route('profile.edit', $year)">
                            {{ __('Profile') }}
                        </x-responsive-nav-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-responsive-nav-link as="a" :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-responsive-nav-link>
                        </form>
                    </div>
                </div>
            </div>

        </nav>
    </header>
    <!-- ========== END HEADER ========== -->

</x-splade-toggle>