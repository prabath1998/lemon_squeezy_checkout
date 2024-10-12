<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (isset($checkout))
                <x-lemon-button :href="$checkout" class="px-8 py-4 bg-slate-100 rounded-md">
                    Buy Product
                </x-lemon-button>
            @endif
        </div>
    </div>
</x-app-layout>
