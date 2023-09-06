<x-splade-data remember="navigation" local-storage :default="\Route::currentRouteName()">
    <div class="flex flex-col flex-1 min-h-0 bg-white shadow md:border-r md:border-gray-200">
        <div class="flex flex-col flex-1 pb-4 overflow-y-auto md:pt-5">
            <div class="flex items-center flex-shrink-0 gap-2 px-4">
                <x-application-logo class="w-auto h-6" />
                <p class="text-2xl font-bold">{{ config('app.name') }}</p>
            </div>
            <nav class="flex-1 px-2 mt-5 space-y-1 bg-white">
                <x-nav-link icon="HomeIcon" name="dashboard" />
            </nav>
        </div>
        <div class="flex flex-shrink-0 p-4 md:border-t md:border-gray-200">
            <a href="#" class="flex-shrink-0 block w-full group">
                <div class="flex items-center">
                    <x-splade-defer>
                        <img class="inline-block rounded-full h-9 w-9" src="{{ auth()->user()->avatar }}"
                            alt="{{ auth()->user()->name }}">
                    </x-splade-defer>
                    <div class="ml-3">
                        <p class="text-sm font-medium text-gray-700 group-hover:text-gray-900">
                            {{ auth()->user()->name }}</p>
                        <!-- Authentication -->
                        <x-splade-form method="POST" :action="route('logout')">
                            <button
                                class="text-xs font-medium text-gray-500 shadow-transparent group-hover:text-gray-700">
                                {{ __('Log Out') }}
                            </button>
                        </x-splade-form>

                    </div>
                </div>
            </a>
        </div>
    </div>
</x-splade-data>
