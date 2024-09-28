<div>
  <div class="mb-4">
    <livewire:user.create />
  </div>
  <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
      <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
        <tr>
          <th scope="col" class="px-6 py-3">
            Id
          </th>
          <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
            Username
          </th>
          <th scope="col" class="px-6 py-3">
            Email
          </th>
          <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
            Role
          </th>
        </tr>
      </thead>
      <tbody>
        @foreach ($users as $user)
        <livewire:user.user-table :user="$user" wire:key="{{ $user->uuid }}">
          @endforeach
      </tbody>
    </table>
  </div>
</div>