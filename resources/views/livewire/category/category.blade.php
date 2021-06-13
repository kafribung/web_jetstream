<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Category') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-x-auto">
                <div class="min-w-screen flex items-center justify-center bg-gray-100 font-sans overflow-hidden">
                    <div class="w-full lg:w-5/6">
                        {{-- Modal --}}
                        @if ($modal)
                            @include('livewire.category.createOrEdit')
                        @endif
                        {{-- Modal Delete --}}
                        @if ($modalDelete)
                            @include('livewire.category.delete')
                        @endif
                        {{-- Flash Massage --}}
                        @if (session('msg'))
                        <div class="bg-green-300 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                            <strong class="font-bold">Success!</strong>
                            <span class="block sm:inline">{{ session('msg') }}.</span>
                        </div>
                        @endif
                        <div class="bg-white shadow-md rounded my-6">
                            {{-- Button Create --}}
                            <button wire:click=create class="w-4 mr-2 transform hover:text-blue-500 hover:scale-110">
                                <svg  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </button>
                            <table class="min-w-max w-full table-auto">
                                <thead>
                                    <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                        <th class="py-3 px-6 text-left">No</th>
                                        <th class="py-3 px-6 text-left">Name</th>
                                        <th class="py-3 px-6 text-center">Actions</>
                                    </tr>
                                </thead>
                                <tbody class="text-gray-600 text-sm font-light">
                                    @forelse ($categories as $key=>$category)
                                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                                        <td class="py-3 px-6 text-left whitespace-nowrap">
                                            <span class="font-medium">{{ $key+1 }}</span>
                                        </td>
                                        <td class="py-3 px-6 text-left whitespace-nowrap">
                                            <span class="font-medium">{{ $category->name }}</span>
                                        </td>
                                        <td class="py-3 px-6 text-center">
                                            <div class="flex item-center justify-center">
                                                <button wire:click="edit({{ $category->id }})"  class="w-4 mr-2 transform hover:text-yellow-400 hover:scale-110">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                    </svg>
                                                </button>
                                                <button wire:click="delete({{ $category->id }})" class="w-4 mr-2 transform hover:text-red-400 hover:scale-110">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    @empty
                                    <td class="py-3 px-6 text-left whitespace-nowrap" colspan="3">
                                        <span class="font-medium">Data tidak ditemukan</span>
                                    </td>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
