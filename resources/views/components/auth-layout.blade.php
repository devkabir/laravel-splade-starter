<div class="flex flex-col items-center min-h-screen pt-6 bg-gray-100 sm:justify-center sm:pt-0">
    <div class="flex flex-col items-center justify-center flex-grow w-full">
        <div>
            <x-application-logo class="h-32 fill-gray-500" />
        </div>

        <div class="w-full px-6 py-4 mt-6 overflow-hidden bg-white shadow-md sm:max-w-md sm:rounded-lg">
            {{ $slot }}
        </div>
        <x-splade-link class="mt-5" href="/">{{ __('Back to') }} {{ config('app.name') }}</x-splade-link>
    </div>

</div>
