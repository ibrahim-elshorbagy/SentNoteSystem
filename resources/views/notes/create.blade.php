<x-app-layout>
    <x-slot name="header">
    <div class="flex items-center justify-between">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Create A Notes') }}
        </h2>

        <x-button secondary icon="arrow-left" href="{{ route('notes.index') }}" wire:navigate>
            All Notes
        </x-button>
    </div>
</x-slot>
    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
                <div class="p-6 text-gray-900">
                    <livewire:notes.create-note />
                </div>
        </div>
    </div>
</x-app-layout>
