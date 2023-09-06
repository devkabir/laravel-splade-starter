<x-banner />
<div>
    <x-splade-modal slideover position="left" name="mobile-sidebar">
        <x-sidebar />
    </x-splade-modal>
    <!-- Static sidebar for desktop -->
    <div class="hidden md:fixed md:inset-y-0 md:flex md:w-52 md:flex-col">
        <x-sidebar />
    </div>
    <div class="flex flex-col flex-1 md:pl-52">
        <main class="flex-1">
            <x-splade-button
                class="sticky top-0 inline-flex items-center justify-center float-right w-12 h-12 mt-3 mr-3 text-gray-500 rounded-md md:hidden hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
                type="link" href="#mobile-sidebar">
                <Bars3Icon class="w-6 h-6" />
            </x-splade-button>
            <div class="py-6">
                <div class="px-4 mx-auto max-w-7xl sm:px-6 md:px-8">
                    {{ $slot }}
                </div>
            </div>
        </main>
    </div>
</div>
