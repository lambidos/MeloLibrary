<x-modal form-action="edit">
  <x-slot name="title">
    <div>Update artist info</div>
  </x-slot>

  <x-slot name="content">
    <div>
      @if ($flushMessage)
      <div id="alert-3" class="flex p-4 mb-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
        <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
        </svg>
        <span class="sr-only">Info</span>
        <div class="ml-3 text-sm font-medium">
          {{ $flushMessage}}
        </div>
        <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-3" aria-label="Close">
          <span class="sr-only">Close</span>
          <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
          </svg>
        </button>
      </div>
      
      @endif

      <!-- Your Livewire component's HTML here -->
    </div>

    <div class="">
      <x-input-label for="name" :value="__('name')" />
      <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" wire:model="name" required autocomplete="username" />
      <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>

    <div class="mt-4">
      <x-input-label for="country" :value="__('country')" />
      <x-text-input id="country" class="block mt-1 w-full" type="text" name="country" :value="$artist->country" required autocomplete="username" />
      <x-input-error :messages="$errors->get('country')" class="mt-2" />
    </div>
    <div class="mt-4">
      <x-input-label for="date_of_birth" :value="__('date_of_birth')" />
      <x-text-input id="date_of_birth" class="block mt-1 w-full" type="date" name="date_of_birth" :value="$artist->date_of_birth" required autocomplete="username" />
      <x-input-error :messages="$errors->get('date_of_birth')" class="mt-2" />
    </div>
    <div class="mt-4 flex gap-5">
      <div class="h-24 w-24 bg-red-500">
        <img class="h-24 w-24" src="{{ $artist->cover_url }}" alt="">
      </div>
      <div class=" max-w-[40px]">
        <input type="file" name="cover" id="">
        <x-input-error :messages="$errors->get('cover')" class="mt-2" />
      </div>
    </div>

  </x-slot>

  <x-slot name="buttons">
    <div class="mt-5 mx-auto">
      <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" role="submit">Save</button>
    </div>
  </x-slot>

</x-modal>