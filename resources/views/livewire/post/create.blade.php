
    <div
        class="block max-w-xl mt-8 mx-auto p-16 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
        <x-toast-alert />
        <form class="max-w-xl mx-auto" wire:submit='save'>
            <div class="text-center">Create POST</div>
            <div class="mt-2">
                <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                <input type="text" id="title" wire:model="form.title"
                    class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                @error('form.title')
                <p class="mt-2 text-xs text-red-600 dark:text-red-400"><span class="font-medium">{{$message}} !</span>
                </p>
                @enderror
            </div>
            <div class="mt-2">
                <label for="slug" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">body</label>
                <input type="text" id="slug" wire:model='form.slug'
                    class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                @error('form.slug')
                <p class="mt-2 text-xs text-red-600 dark:text-red-400"><span class="font-medium">{{$message}} !</span>
                </p>
                @enderror
            </div>
            <div class="mt-2 mb-2">
                <label for="body" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    body</label>
                <textarea id="body" rows="4" wire:model='form.body'
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="write content..">
               </textarea>
                @error('form.body')
                <p class="mt-2 text-xs text-red-600 dark:text-red-400"><span class="font-medium">{{$message}} !</span>
                </p>
                @enderror

            </div>
            <button
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Save</button>
        </form>
    </div>


