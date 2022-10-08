<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>

                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex flex-column justify-between card bg-grey-200 shadow p-6 m-3">
                        <h3 class="card-title text-center">Ttitle</h3>
                        <p class="card-body p-3 text-center">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, incidunt?
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
