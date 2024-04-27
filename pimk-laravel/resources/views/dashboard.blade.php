<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="absolute top-4 left-0 right-0 mx-auto" id="notif-login">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-60">
            <div class="bg-white dark:bg-[#111826] overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 text-center">
                    Selamat datang {{ auth()->user()->name }}!
                </div>
            </div>
        </div>
    </div>
    <div class="flex">
        <div class="py-12 mx-auto">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg h-10 px-10 py-2">
                    <a class="text-gray-900 dark:text-gray-100" href="{{ route('tugas.pimk') }}">
                        Tugas PIMK
                    </a>
                </div>
            </div>
        </div>
    </div>
    <script>
        const notif = document.getElementById("notif-login");
        
        setTimeout(() => {
            notif.classList.add("hidden");
        }, 1500);
    </script>
</x-app-layout>