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

                    <h1 class="mb-4 font-semibold text-gray-800 text-2xl lg:text-3xl dark:text-neutral-200">
                        Kelola PPTK
                    </h1>

                    <x-splade-form :default="['user' => $user, 'year' => $year]" action="{{route('administrator.management_user.update', [$year, $user])}}" method="patch">

                        <div class="grid md:grid-cols-2 md:gap-6">
                            <div class="relative z-999 w-full mb-6 group">
                                <x-splade-input required name="user.name" type="text" placeholder="Nama Lengkap" label="Nama Lengkap" />
                            </div>
                            <div class="relative z-999 w-full mb-6 group">
                                <x-splade-input required name="user.nip" type="text" placeholder="NIP" label="NIP" />
                            </div>
                        </div>
                        <div class="grid md:grid-cols-2 md:gap-6">
                            <div class="relative z-999 w-full mb-6 group">
                                <x-splade-input required name="user.username" type="text" placeholder="Username" label="Username" />
                            </div>
                            <div class="relative z-999 w-full mb-6 group">
                                <x-splade-input name="password" type="password" placeholder="Password" label="Password" />
                            </div>
                        </div>
                        <div class="grid md:grid-cols-2 md:gap-6">
                            <div class="relative z-999 w-full mb-6 group">
                                <x-splade-input required name="user.email" type="email" placeholder="Email" label="Email" />
                            </div>
                            <div class="relative z-999 w-full mb-6 group">
                            <x-splade-select required label="Roles" name="user.roles" :options="$role" option-label="name" option-value="id" />
                            </div>
                        </div>
                        <div class="flex justify-end gap-x-2">
                            <x-splade-group>
                                <x-splade-submit class="" label="Simpan" />
                            </x-splade-group>
                        </div>

                    </x-splade-form>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>