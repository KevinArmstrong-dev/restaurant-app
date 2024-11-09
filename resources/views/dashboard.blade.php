<x-app-layout>
    <x-slot name="header">
  
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Main Functions') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                  
                         <div class="flex flex-wrap">
                        <div class="w-full sm:w-1/3 md:w-1/3 p-2">
                            <a href="/management">     
                                <h4>Management</h4>
                                <img width="50px" src="{{ asset('images/management.svg') }}" />
                            </a>    
                        </div>
                        <div class="w-full sm:w-1/3 md:w-1/3 p-2">
                            <a href="/report">    
                                <h4>Cashier</h4>
                                <img width="50px" src="{{ asset('images/cashier-machine.png') }}" />
                            </a>
                        </div>
                        <div class="w-full sm:w-1/3 md:w-1/3 p-2">
                            <a href="/report">
                                <h4>Report</h4>
                                <img width="50px" src="{{ asset('images/report.png') }}" />
                            </a>
                        </div>
                    </div>
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
