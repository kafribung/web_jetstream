<!-- This example requires Tailwind CSS v2.0+ -->
<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-500">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
        <!-- This element is to trick the browser into centering the modal contents. -->
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>
        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                    <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
                        {{ ($category_id ? 'Update' : 'Create') }} Category
                    </h3>
                    <div class="mt-2">
                        <x-jet-label for="name" value="{{ __('Name') }}" />
                        <x-jet-input id="name" wire:model="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        @error('name')
                            <small  class="text-red-500 text-sm">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                <button wire:click.prevent="storeOrUpdate" type="submit" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2   {{ ($category_id ? ' bg-yellow-400 hover:bg-yellow-200 focus:ring-yellow-500' : 'bg-blue-400 hover:bg-blue-200 focus:ring-blue-500') }} text-base font-medium text-white  focus:outline-none focus:ring-2 focus:ring-offset-2  sm:ml-3 sm:w-auto sm:text-sm">   {{ ($category_id ? 'Update' : 'Create') }} </button>
                <button wire:click="openCloseModal" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm"> Cancel </button>
            </div>
    </div>
    </div>
</div>