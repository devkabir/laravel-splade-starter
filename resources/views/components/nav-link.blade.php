@props(['name', 'icon'])

@php
    $active = $name === Route::currentRouteName();
@endphp

<a href="{{ route($name) }}" @class([
    'bg-slate-100 text-gray-900 font-bold' => $active,
    'text-gray-600 hover:bg-slate-50 hover:text-gray-900' => !$active,
    'flex items-center px-2 py-2 text-sm font-medium text-gray-900 rounded-md bg-slate-100 group',
])>
    <{{ $icon }} @class([
        'flex-shrink-0 w-6 h-6 mr-3 text-gray-500',
        'text-gray-500' => $active,
        'text-gray-400 group-hover:text-gray-500' => !$active,
    ]) />
    {{ ucwords($name) }}
</a>
