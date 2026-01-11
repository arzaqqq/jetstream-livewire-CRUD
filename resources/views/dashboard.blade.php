<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="bg-white p-8 overflow-auto mt-16 h-screen">
  <h2 class="text-2xl mb-4">list Maskapai terbangt</h2>

  <!-- Classes Table -->
  <div class="relative overflow-auto">
    <div class="overflow-x-auto rounded-lg">
      <table class="min-w-full bg-white border mb-20">
        <thead>
          <tr class="bg-[#2B4DC994] text-center text-xs md:text-sm font-thin text-white">
            <th class="p-0">
              <span class="block py-2 px-3 border-r border-gray-300">ID</span>
            </th>
            <th class="p-0">
              <span class="block py-2 px-3 border-r border-gray-300">Nama Maskapai</span>
            </th>
            <th class="p-0">
              <span class="block py-2 px-3 border-r border-gray-300">grade</span>
            </th>
            <th class="p-4 text-xs md:text-sm">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr class="border-b text-xs md:text-sm text-center text-gray-800">
            <td class="p-2 md:p-4">01</td>
            <td class="p-2 md:p-4">Class 1</td>
            <td class="p-2 md:p-4">Beginner</td>
            <td class="relative p-2 md:p-4 flex justify-center space-x-2">
              <button class="bg-blue-500 text-white px-3 py-1 rounded-md text-xs md:text-sm">Edit</button>
              <button class="bg-red-500 text-white px-3 py-1 rounded-md text-xs md:text-sm">Delete</button>
            </td>
          </tr>

        </tbody>
      </table>
    </div>
  </div>
</div>
            </div>
        </div>
    </div>
</x-app-layout>
