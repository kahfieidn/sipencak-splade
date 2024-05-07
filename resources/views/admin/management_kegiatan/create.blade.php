<x-splade-modal>

    <!-- Card Section -->
    <div class="max-w-2xl mx-auto">
        <!-- Card -->
        <div class="bg-white rounded-xl">
            <div class="text-center mb-8">
                <h2 class="text-2xl md:text-3xl font-bold text-gray-800">
                    Tambah {{$key}}
                </h2>
            </div>

            <x-splade-form method="POST" action="{{route('administrator.management_kegiatan.store', [$year, $key])}}">
                @if($key == 'Program')
                <!-- Section -->
                <div class="first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200">
                    <div class="mt-2 space-y-3">
                        <x-splade-input name="kode" label="Kode :" />
                    </div>
                    <div class="mt-2 space-y-3">
                        <x-splade-input name="nama_program" label="Nama Program :" />
                    </div>
                    <div class="mt-2 space-y-3">
                        <x-splade-select name="status" label="Status">
                            <option value="dibuka">DIBUKA</option>
                            <option value="dikunci">DIKUNCI</option>
                        </x-splade-select>

                    </div>
                </div>
                <!-- End Section -->
                <div class="mt-5 flex justify-end gap-x-2">
                    <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none">
                        Cancel
                    </button>
                    <x-splade-submit class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none" label="Save" />
                </div>
                @endif
                @if($key == 'Kegiatan')
                <!-- Section -->
                <div class="first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200">
                    <div class="mt-2 space-y-3">
                        <x-splade-input name="kode" label="Kode :" />
                    </div>
                    <div class="mt-2 space-y-3">
                        <x-splade-input name="nama_kegiatan" label="Nama Kegiatan :" />
                    </div>
                    <div class="mt-2 space-y-3">
                        <x-splade-select name="status" label="Status">
                            <option value="dibuka">DIBUKA</option>
                            <option value="dikunci">DIKUNCI</option>
                        </x-splade-select>
                    </div>
                    <div class="mt-2 space-y-3">
                        <x-splade-select name="program_id" choices :options="$programs" option-label="nama_program" label="Program" option-value="id" />
                    </div>
                </div>
                <!-- End Section -->
                <div class="mt-5 flex justify-end gap-x-2">
                    <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none">
                        Cancel
                    </button>
                    <x-splade-submit class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none" label="Save" />
                </div>
                @endif
            </x-splade-form>

        </div>
        <!-- End Card -->
    </div>
    <!-- End Card Section -->

</x-splade-modal>