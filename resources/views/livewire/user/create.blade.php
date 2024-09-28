<div
    class="block w-full mx-auto p-16 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
    <x-toast-alert />
    <form class="max-w-xl mx-auto" wire:submit='saveUser'>
        <div class="text-center">Create User</div>
        <div class="mt-2">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
            <input type="text" id="name" wire:model="userForm.name"
                class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            @error('userForm.name')
            <p class="mt-2 text-xs text-red-600 dark:text-red-400"><span class="font-medium">{{$message}} !</span>
            </p>
            @enderror
        </div>
        <div class="mt-2">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">email</label>
            <input type="text" id="email" wire:model='userForm.email'
                class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            @error('userForm.email')
            <p class="mt-2 text-xs text-red-600 dark:text-red-400"><span class="font-medium">{{$message}} !</span>
            </p>
            @enderror
        </div>
        <div class="mt-2">
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">password</label>
            <input type="password" id="password" wire:model='userForm.password'
                class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            @error('userForm.password')
            <p class="mt-2 text-xs text-red-600 dark:text-red-400"><span class="font-medium">{{$message}} !</span>
            </p>
            @enderror
        </div>
        <div class="mt-2">
            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select
                Role</label>
            <select id="countries" wire:model="userForm.role"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value="admin">Admin</option>
                <option value="guest">User</option>
            </select>
            @error('userForm.role') <p class="mt-2 text-xs text-red-600 dark:text-red-400"><span
                    class="font-medium">{{$message}} !</span>
            </p> @enderror
        </div>

        <button class="bg-blue-500 rounded-lg  px-4 py-2 mt-4" type="submit" wire:loading.class.remove="bg-blue-500">
            Save
        </button>
    </form>
</div>