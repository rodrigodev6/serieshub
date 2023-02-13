<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{__('Suas séries')}}    
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto md:max-w-5xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex justify-end mb-2">
                        <a href="{{ route('series.create') }}" rel="noopener noreferrer" class="bg-blue-500 text-white p-2 rounded hover:bg-blue-800 justify-end">Nova série</a>
                    </div>
                    <div class="relative overflow-x-auto">
                        <table class="w-full text-sm text-left text-gray-900 overflow-auto">
                            <thead class="text-xs text-gray-700 uppercase  text-gray-900">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Nome
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Temporadas
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Editar série
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Temporadas
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($series as $serie)
                                <tr class="bg-white border-b border-gray-400 ">
                                    <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                        {{ $serie->name }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $serie->series_description }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="{{ route('series.edit', $serie->id) }}" class="text-orange-800 justify-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                            </svg>
                                        </a>
                                    </td>
                                    <td class="px-6 py-4 flex">
                                        <a href="{{ route('seasons.index', $serie->id)}}" class="text-blue-500">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                              </svg>                                              
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="my-2">
                            {{ $series->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>