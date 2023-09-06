<x-auth-layout>
    @if ($status)
        <div class="mb-4 text-sm font-medium text-rose-600">
            {{ $error }}
        </div>
    @endif
    <div class="flex flex-wrap gap-4">
        @foreach (['facebook' => __('Facebook'), 'google' => __('Google'), 'github' => __('Github')] as $provider => $label)
            @if (config('services.' . $provider . '.client_id'))
                <x-splade-button class="w-fit" type="link" primary
                    href="{{ route('auth-social.provider-to-redirect', ['provider' => $provider]) }}">Login
                    with
                    {{ $label }}</x-splade-button>
            @endif
        @endforeach
    </div>

</x-auth-layout>
