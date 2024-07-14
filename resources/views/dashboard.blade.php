<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}
{{-- 
    <div class="sidebar fixed top-0 bottom-0 lg:left-0 left-[-300px] duration-1000
    p-2 w-[300px] overflow-y-auto text-center bg-gray-600 shadow h-screen">
    <button id="burger" name="burger" type="button" class="block absolute right-4 text-white mt-1">
        <span class="burger transition duration-500 ease-in-out origin-top-left"></span>
        <span class="burger transition duration-500 ease-in-out"></span>
        <span class="burger transition duration-500 ease-in-out origin-bottom-left"></span>
    </button>

    <div class="p-2.5  flex items-center rounded-md ">
     kasih logo disini
        <h1 class="text-[15px]  ml-3 text-xl text-gray-200 font-bold">H2FL MENU</h1>
        
      </div>
      <div class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-blue-600">
        <i class="bi bi-house-door-fill"></i>
        <span class="text-[15px] ml-2 text-gray-200">Home</span>
      </div>
    </div> --}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <x-welcome />
            </div>
        </div>
    </div>
</x-app-layout>

