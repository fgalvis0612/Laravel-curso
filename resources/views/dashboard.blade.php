<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <x-alert type="Info">

            <x-slot name="title">
                Prueba
            </x-slot>
                <p>Es un texto de prueba</p>
            </x-alert>

        </div>
    </div>
</x-app-layout>
