<x-app-layout>
<x-slot name="header">
    <div class="flex items-center justify-between">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Notes') }}
        </h2>

        <x-button primary icon="plus" href="{{ route('notes.create') }}" wire:navigate>
            Create Note
        </x-button>
    </div>
</x-slot>



    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="p-6 text-gray-900">
                    <livewire:notes.show-notes lazy/>
                </div>
        </div>
    </div>
</x-app-layout>
