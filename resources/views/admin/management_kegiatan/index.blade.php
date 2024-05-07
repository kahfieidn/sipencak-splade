<x-app-layout>
    @include('layouts.navigation')

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Management User') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- Features -->
                    <div class="max-w-[85rem] mx-auto">
                        <!-- Grid -->
                        <div class="grid lg:grid-cols-3 gap-8 lg:gap-12">
                            <div class="lg:col-span-1">
                                <div class="sm:self-end col-span-12 sm:col-span-7 md:col-span-8 lg:col-span-5 lg:col-start-3">
                                    <!-- Card -->
                                    <a class="group relative block rounded-xl overflow-hidden" href="#">
                                        <div class="aspect-w-12 aspect-h-7 sm:aspect-none rounded-xl overflow-hidden">
                                            <img class="group-hover:scale-105 transition-transform duration-500 ease-in-out rounded-xl w-full object-cover" src="https://images.unsplash.com/photo-1606868306217-dbf5046868d2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=3481&q=80" alt="Image Description">
                                        </div>
                                        <div class="absolute bottom-0 start-0 end-0 p-2 sm:p-4">
                                            <div class="text-sm font-bold text-gray-800 rounded-lg bg-white p-4 md:text-xl dark:bg-neutral-800 dark:text-neutral-200">
                                                Kelola Program Kegiatan
                                            </div>
                                        </div>
                                    </a>
                                    <!-- End Card -->
                                </div>

                            </div>
                            <!-- End Col -->

                            <div class="lg:col-span-2">
                                <!-- Card Section -->
                                <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-2 lg:py-12 mx-auto">
                                    <!-- Grid -->
                                    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6">
                                        <!-- Card -->
                                        <div class="flex flex-col gap-y-3 lg:gap-y-5 p-4 md:p-5 bg-white border shadow-sm rounded-xl">
                                            <div class="inline-flex justify-center items-center">
                                                <span class="size-2 inline-block bg-gray-500 rounded-full me-2"></span>
                                                <span class="text-xs font-semibold uppercase text-gray-600">Projects</span>
                                            </div>

                                            <div class="text-center">
                                                <h3 class="text-3xl sm:text-4xl lg:text-5xl font-semibold text-gray-800">
                                                    150
                                                </h3>
                                            </div>

                                            <dl class="flex justify-center items-center divide-x divide-gray-200">
                                                <dt class="pe-3">
                                                    <span class="text-green-600">
                                                        <svg class="inline-block size-4 self-center" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="m7.247 4.86-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 0 0 .753-1.659l-4.796-5.48a1 1 0 0 0-1.506 0z" />
                                                        </svg>
                                                        <span class="inline-block text-sm">
                                                            1.7%
                                                        </span>
                                                    </span>
                                                    <span class="block text-sm text-gray-500">change</span>
                                                </dt>
                                                <dd class="text-start ps-3">
                                                    <span class="text-sm font-semibold text-gray-800">5</span>
                                                    <span class="block text-sm text-gray-500">last week</span>
                                                </dd>
                                            </dl>
                                        </div>
                                        <!-- End Card -->

                                        <!-- Card -->
                                        <div class="flex flex-col gap-y-3 lg:gap-y-5 p-4 md:p-5 bg-white border shadow-sm rounded-xl">
                                            <div class="inline-flex justify-center items-center">
                                                <span class="size-2 inline-block bg-green-500 rounded-full me-2"></span>
                                                <span class="text-xs font-semibold uppercase text-gray-600">Successful conversions</span>
                                            </div>

                                            <div class="text-center">
                                                <h3 class="text-3xl sm:text-4xl lg:text-5xl font-semibold text-gray-800">
                                                    25
                                                </h3>
                                            </div>

                                            <dl class="flex justify-center items-center divide-x divide-gray-200">
                                                <dt class="pe-3">
                                                    <span class="text-green-600">
                                                        <svg class="inline-block size-4 self-center" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="m7.247 4.86-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 0 0 .753-1.659l-4.796-5.48a1 1 0 0 0-1.506 0z" />
                                                        </svg>
                                                        <span class="inline-block text-sm">
                                                            5.6%
                                                        </span>
                                                    </span>
                                                    <span class="block text-sm text-gray-500">change</span>
                                                </dt>
                                                <dd class="text-start ps-3">
                                                    <span class="text-sm font-semibold text-gray-800">7</span>
                                                    <span class="block text-sm text-gray-500">last week</span>
                                                </dd>
                                            </dl>
                                        </div>
                                        <!-- End Card -->

                                        <!-- Card -->
                                        <div class="flex flex-col gap-y-3 lg:gap-y-5 p-4 md:p-5 bg-white border shadow-sm rounded-xl">
                                            <div class="inline-flex justify-center items-center">
                                                <span class="size-2 inline-block bg-red-500 rounded-full me-2"></span>
                                                <span class="text-xs font-semibold uppercase text-gray-600">Failed conversions</span>
                                            </div>

                                            <div class="text-center">
                                                <h3 class="text-3xl sm:text-4xl lg:text-5xl font-semibold text-gray-800">
                                                    4
                                                </h3>
                                            </div>

                                            <dl class="flex justify-center items-center divide-x divide-gray-200">
                                                <dt class="pe-3">
                                                    <span class="text-red-600">
                                                        <svg class="inline-block size-4 self-center" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                                                        </svg>
                                                        <span class="inline-block text-sm">
                                                            5.6%
                                                        </span>
                                                    </span>
                                                    <span class="block text-sm text-gray-500">change</span>
                                                </dt>
                                                <dd class="text-start ps-3">
                                                    <span class="text-sm font-semibold text-gray-800">7</span>
                                                    <span class="block text-sm text-gray-500">last week</span>
                                                </dd>
                                            </dl>
                                        </div>
                                        <!-- End Card -->
                                    </div>
                                    <!-- End Grid -->
                                </div>
                                <!-- End Card Section -->
                            </div>
                            <!-- End Col -->
                        </div>
                        <!-- End Grid -->
                    </div>
                    <!-- End Features -->

                    <!-- Header -->
                    <div class="py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200 dark:border-neutral-700">

                        <div>
                            <h2 class="text-xl font-semibold text-gray-800 dark:text-neutral-200">
                                Management Program Kegiatan
                            </h2>
                            <p class="text-sm text-gray-600 dark:text-neutral-400">
                                Add data, edit and more.
                            </p>
                        </div>

                        <div>
                            <div class="inline-flex gap-x-2">
                                <Link slideover class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none" href="{{route('administrator.management_kegiatan.create', $year)}}?key=Program">
                                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14" />
                                    <path d="M12 5v14" />
                                </svg>
                                Tambah Program
                                </Link>
                                <Link slideover class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none" href="{{route('administrator.management_kegiatan.create', $year)}}?key=Kegiatan">
                                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14" />
                                    <path d="M12 5v14" />
                                </svg>
                                Tambah Kegiatan
                                </Link>
                                <Link slideover class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none" href="{{route('administrator.management_kegiatan.create', $year)}}?key=Sub Kegiatan">
                                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14" />
                                    <path d="M12 5v14" />
                                </svg>
                                Tambah Sub Kegiatan
                                </Link>
                            </div>
                        </div>
                    </div>
                    <!-- End Header -->

                    <x-splade-table :for="$programs" striped class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
                        <x-slot name="head" class="bg-gray-50 dark:bg-neutral-800">
                            <thead>
                                <tr>
                                    @foreach($programs->columns() as $column)
                                    <th>{{ $column->label }}</th>
                                    @endforeach
                                </tr>
                            </thead>
                        </x-slot>

                        <x-slot name="body">
                            <tbody class="text-center">
                                @foreach($programs->resource as $program)
                                <tr>
                                    <th>{{$program->nama_program}}</th>
                                </tr>
                                
                                @foreach($program->kegiatan as $kegiatan)
                                <tr>
                                    <td>
                                        {{$kegiatan->kode}}
                                    </td>
                                    <td>
                                        {{$kegiatan->nama_kegiatan}}
                                    </td>
                                </tr>
                                @endforeach
                                @endforeach
                            </tbody>
                        </x-slot>

                    </x-splade-table>



                </div>
            </div>
        </div>
    </div>


</x-app-layout>